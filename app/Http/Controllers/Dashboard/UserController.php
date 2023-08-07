<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller

{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }

    public function create()
    {

        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            // dd($user);

            return redirect()->route('dashboard.users.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return ($ex);
            return redirect()->route('dashboard.users.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function edit($id)
    {


        $user = User::select()->find($id);
        if (!$user) {
            return redirect()->route('dashboard.users.index')->with(['error' => 'Undefined']);
        }

        return view('dashboard.users.edit', compact('user'));
    }

    public function update($id, Request $request)
    {

        try {
            $user = User::find($id);
            if (!$user) {
                return redirect()->route('dashboard.users.edit', $id)->with(['error' => 'Undefined']);
            }
            $user['password'] = bcrypt($request->password);
            $user->update($request->except('_token', 'password'));
            return redirect()->route('dashboard.users.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.users.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function destroy($id)
    {

        try {
            $user = User::find($id);
            if (!$user) {
                return redirect()->route('dashboard.users.index', $id)->with(['error' => 'Undefined']);
            }
            $user->delete();

            return redirect()->route('dashboard.users.index')->with(['success' => 'deleted']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.users.index')->with(['error' => 'Erorr Try Again']);
        }
    }
}
