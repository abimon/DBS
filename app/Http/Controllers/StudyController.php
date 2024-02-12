<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Study::all();
        return view('studies.index',compact('items'))->with('lessons');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studies.create');
    }

    public function store()
    {
        if(request()->hasFile('cover')){
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = request()->file('cover')->save('public/covers',$filename);
        }
        Study::create([
            'title'=>request()->title,
            'description'=>request()->description,
            'cover_path'=>$path,
            'slug' => Str::slug(request()->title, '_'),
            'author'=>Auth()->user()->id
        ]);
    }
    public function show($id)
    {
        $item=Study::findOrFail($id);
        return view('Studies.show',compact('item'))->with('lessons');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Study::findOrFail($id);
        return view('Studies.edit');
    }

    public function update($id)
    {
        if(request()->hasFile('cover')){
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = request()->file('cover')->save('public/covers',$filename);
        }
        else{
            $path = (Study::findOrFail($id))->cover_path;
        }
        Study::where('id',$id)->update([
            'title'=>request()->title,
            'description'=>request()->description,
            'cover_path'=>$path,
            'slug' => Str::slug(request()->title, '_'),
            'author'=>Auth()->user()->id
        ]);
    }

    public function destroy($id)
    {
        Study::destroy($id);
        return redirect()->back();
    }
}
