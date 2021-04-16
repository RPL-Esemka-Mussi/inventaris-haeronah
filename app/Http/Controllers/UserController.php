<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user', compact('users'));
    }

    public function tambah()
    {
        return view('adduser');
    }

    public function insert(Request $res)
    {
        User::create([
            "name" => $res->name,
            "email" => $res->email,
            "password" => bcrypt($res->password),
            "level" => $res->level,
            "alamat" => $res->alamat,
            "telepon" => $res->telepon
        ]);

        return redirect('/user')->with('success', 'Data Berhasil Ditambahkan <3 ');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edituser', compact('user'));
    }

    public function update(Request $res)
    {
        $user = User::findOrFail($res->id);

        $user->name = $res->name;
        $user->email = $res->email;

        if (!empty($res->password)) {
            $user->password = $res->password;
        }

        $user->level = $res->level;
        $user->alamat = $res->alamat;
        $user->telepon = $res->telepon;
        $user->save();

        return redirect('/user')->with('success', 'Data Berhasil Diganti:)');
    }

    public function delete($id)
    {
        User::destroy($id);

        return redirect('/user')->with('success', 'Data Berhasil Dihapus!!:)');
    }
}