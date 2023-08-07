<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function dashboard()
    {
        return view('dashboard.dashboard');
    } //end of index

    public function index()
    {
        $admins = Admin::all();
        return view('dashboard.admins.index', compact('admins'));
    }

    public function getLogin()
    {
        return view('dashboard.auth.login');
    } //end of getLogin

    public function login(LoginRequest $request)
    {

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->route('dashboard.dashboard');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'There is an error in the data']);
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function create()
    {

        return view('dashboard.admins.create');
    }

    public function store(Request $request)
    {

        try {
            $admin = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            // dd($admin);

            return redirect()->route('dashboard.admins.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return ($ex);
            return redirect()->route('dashboard.admins.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function edit($id)
    {


        $admin = Admin::select()->find($id);
        if (!$admin) {
            return redirect()->route('dashboard.admins.index')->with(['error' => 'Undefined']);
        }

        return view('dashboard.admins.edit', compact('admin'));
    }

    public function update($id, Request $request)
    {

        try {
            $admin = Admin::find($id);
            if (!$admin) {
                return redirect()->route('dashboard.admins.edit', $id)->with(['error' => 'Undefined']);
            }
            $admin['password'] = bcrypt($request->password);
            $admin->update($request->except('_token', 'password'));
            return redirect()->route('dashboard.admins.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.admins.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function delete($id)
    {

        try {
            $admin = Admin::find($id);
            if (!$admin) {
                return redirect()->route('dashboard.admins.index', $id)->with(['error' => 'Undefined']);
            }
            $admin->delete();

            return redirect()->route('dashboard.admins.index')->with(['success' => 'deleted']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.admins.index')->with(['error' => 'Erorr Try Again']);
        }
    }
}
