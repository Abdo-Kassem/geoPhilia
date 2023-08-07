<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{

    
    public function index()
    {
        $admin = Auth::user();
        return view('dashboard.admin_profile.profile',compact('admin'));
    }

   
    public function update(Request $request)
    {
        $admin = Auth::user();

        try{

            if($request->password !== null) {

                $requestData = $request->except('_token');
                $requestData['password'] = Hash::make($request->password);
                $admin->update($requestData);
    
                return $this->logout($admin);
            } else {
                $admin->update([
                    'name' => $request->name,
                    'email' => $request->email
                ]);

                return redirect()->route('admin.profile')->with(['success' => 'تم التعديل بنجاح']);
            }

        }catch(Exception $ex) {
           
            return redirect()->route('admin.profile')->with(['error' => 'يوجد مشاكل حاول مره اخرى']);
        }

    }

    private function logout($admin)
    {
        Auth::logout();
        session()->invalidate();

        return redirect()->route('dashboard');
    }

}
