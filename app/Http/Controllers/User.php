<?php

namespace App\Http\Controllers;

use \App\Models\Nivel;
use Illuminate\Http\Request;
use \App\Models\User as EntityUser;
use \App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{


    public static function user()
    {
        $levels = Nivel::get();
        return view('pages/regist_user', [
            'levels' => $levels
        ]);
    }

    public function index()
    {
        $users = EntityUser::with('nivel')->get();

        return view('pages/read_users', [
            'dataset' => $users
        ]);
    }

    /**
     * METODO RESPONSAVEL POR GEREAR UM ID PARA O USUÁRIO
     * @return string
     */
    public function generateUserId()
    {
        $lastUser = EntityUser::latest()->first();

        if (!empty($lastUser)) {
            $var = explode('_', $lastUser->user_id);
            $newUserId = (int)$var[1] + 1;
        } else
            $newUserId = 1;

        if ($newUserId < 10) return "USER_000" . $newUserId;
        else if ($newUserId < 100) return "USER_00" . $newUserId;
        else if ($newUserId < 1000) return "USER_0" . $newUserId;
        else return "USER_" . $newUserId;
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'    => ['required', 'email', 'unique:users'],
            'name'     => ['required'],
            'password' => ['min:8', 'confirmed'],
            'level'    => ['required'],
        ]);

        $obUser = new EntityUser;
        //$obUser->user_id  = $this->generateUserId();
        $obUser->name     = $request->name;
        $obUser->email    = $request->email;
        $obUser->password = Hash::make($request->password);
        $obUser->fk_nivel    = $request->level;
        if ($obUser->save()) {
            Log::create([
                'afect'   => 'users',
                'context' => 'user for [' . $request->email . '] created',
                'type'    => 'added',
                'fk_user' => Auth::user()->id
            ]);
            return back()->with('message', 'User created successfully.');
        }
        return back()->withErrors('An error occurred while creating the user');
    }

    public static function dropUser($id)
    {

        if ($id != Auth::user()->id) {
            Log::create([
                'afect'   => 'users',
                'context' => 'user [' . EntityUser::find($id)->first()->email . '] deleted',
                'type'    => 'deleted',
                'fk_user' => Auth::user()->id
            ]);

            EntityUser::where('user_id', $id)->delete();
        }

        return back();
    }
}
