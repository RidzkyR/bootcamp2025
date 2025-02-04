<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //tambah data produk
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        //hapus data produk
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}
