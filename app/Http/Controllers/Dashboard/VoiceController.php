<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Voice;
use Illuminate\Http\Request;

class VoiceController extends Controller
{
    public function index()
    {
        $voices = Voice::all();
        return view('dashboard.voices.index', compact('voices'));
    }

    public function create()
    {
        // $maincategories = MainCategory::all();, compact('maincategories')
        return view('dashboard.voices.create');
    }

    public function store(Request $request)
    {

        try {
            $request_data = $request->all();

            if ($request->hasFile('audio')) {
                $music_file = $request->file('audio');
                $filename = time() . '.' . $music_file->getClientOriginalExtension();
                $location = base_path('uploads/audio/' . $filename);
                $music_file->move($location, $filename);

                $request_data['audio'] = $filename;
            }

            Voice::create($request_data);

            return redirect()->route('dashboard.voices.index')->with(['success' => 'Stored']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('dashboard.voices.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function edit($id)
    {

        // $maincategories = MainCategory::all();, 'maincategories'
        $voice = voice::select()->find($id);
        if (!$voice) {
            return redirect()->route('dashboard.voices.index')->with(['error' => 'Undefined']);
        }

        return view('dashboard.voices.edit', compact('voice'));
    }

    public function update($id, Request $request)
    {

        try {
            $voice = voice::find($id);
            if (!$voice) {
                return redirect()->route('dashboard.voices.edit', $id)->with(['error' => 'Undefined']);
            }
            $request_data = $request->all();
            if ($request->hasFile('audio')) {
                $music_file = $request->file('audio');
                $filename = time() . '.' . $music_file->getClientOriginalExtension();
                $location = base_path('uploads/audio/' . $filename);
                $music_file->move($location, $filename);

                $request_data['audio'] = $filename;
            }
            $voice->update($request_data);
            return redirect()->route('dashboard.voices.index')->with(['success' => 'updated']);
        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('dashboard.voices.index')->with(['error' => 'Erorr Try Again']);
        }
    }

    public function delete($id)
    {

        try {
            $voice = Voice::find($id);
            if (!$voice) {
                return redirect()->route('dashboard.voices.index', $id)->with(['error' => 'Undefined']);
            }
            $voice->delete();

            return redirect()->route('dashboard.voices.index')->with(['success' => 'deleted']);
        } catch (\Exception $ex) {
            return redirect()->route('dashboard.voices.index')->with(['error' => 'Erorr Try Again']);
        }
    }
}
