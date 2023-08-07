<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    public function footer()
    {
        $footers = Footer::all();
        return view('dashboard.manageFront.footer', compact('footers'));
    }
    public function editFooter($id)
    {
        $footer = Footer::select()->find($id);
        if (!$footer) {
            return redirect()->route('dashboard.dashboard')->with(['error' => 'undefined']);
        }

        return view('dashboard.manageFront.editFooter', compact('footer'));
    }

    public function updateFooter($id, Request $request)
    {

        try {
            $footer = Footer::select()->find($id);
            $request_data = $request->all();
            $footer->update($request_data);
            return redirect()->route('dashboard.manageFront.footer')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.manageFront.footer')->with(['error' => 'erorr']);
        }
    }

    public function deleteFooter($id)
    {

        try {
            $footer = Footer::find($id);
            if (!$footer) {
                return redirect()->route('dashboard.manageFront.footer', $id)->with(['error' => 'undefined']);
            }
            $footer->delete();

            return redirect()->route('dashboard.manageFront.footer')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.manageFront.footer')->with(['error' => 'erorr']);
        }
    }
}
