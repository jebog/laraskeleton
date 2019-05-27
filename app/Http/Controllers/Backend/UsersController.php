<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('backend.users.index', compact('data'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $data = User::create($request->all());
        return view('backend.users.index', compact('data'));
    }

    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('backend.users.show', compact("data"));
    }

    public function edit()
    {
        return view('backend.users.show', compact($data));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id)->update($request->all());
        return view('backend.users.show', compact('data'));
    }

    public function destroy($id)
    {
        $row = User::findOrFail($id);
        $row->delete();
        $data = User::all();
        return view('backend.users.index', compact("data"));
    }
}
