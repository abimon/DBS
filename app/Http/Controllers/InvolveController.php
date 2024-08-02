<?php

namespace App\Http\Controllers;

use App\Models\Involve;
use Illuminate\Http\Request;

class InvolveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if((request('email')!=null) && (request('phone')!=null)){
            $contact = request('email') . '/' . request('phone');
        }
        elseif(request('email')!=null){
            $contact = request('email');
        }
        elseif(request('phone')!=null){
            $contact = request('phone');
        }
        else{
            return back()->withInput()->with('error','Phone number or Email is required for contact');
        }
        Involve::create([
            'name'=>request('name'),
            'contact'=>$contact,
            'mode'=>request('mode'),
        ]);
        return back()->with('success', 'Thank you for offering to get involved.');
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
