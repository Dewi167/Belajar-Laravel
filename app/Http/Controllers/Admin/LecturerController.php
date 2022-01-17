<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function create()
    {  
        return view('admin.lecturer.create');
    }
    public function store(Request $request)
    {
      Lecture::create($request->all());
      return redirect()->route('index-lecture')-> with('status', 'wes rampong data mu cok');
    }

    public function index()
    {
      $Lecture = Lecture::all();
      //dd($Lecture);
      // return response()->json($Lecture);
      return view('admin.lecturer.index', compact('Lecture'));

    }

}
