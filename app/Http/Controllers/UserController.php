<?php

namespace App\Http\Controllers;

use App\Models\Nation;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users',compact('users'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
    }

    public function update($id)
    {
        $user=User::findOrFail($id);
        // dd(request());
        if(request()->hasFile('cover')){
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = uniqid().time(). '.' . $extension;
            request()->file('cover')->storeAs('public/profile', $filename);
            $user->cover_photo=$filename;
        }
        if(request()->hasFile('avatar')){
            $extension = request()->file('avatar')->getClientOriginalExtension();
            $filename = uniqid().time(). '.' . $extension;
            request()->file('avatar')->storeAs('public/profile', $filename);
            $user->avatar=$filename;
        }
        if(request()->f_name!=null){
            $user->f_name=request()->f_name;
        }
        if(request()->m_name!=null){
            $user->m_name=request()->m_name;
        }
        if(request()->l_name!=null){
            $user->l_name=request()->l_name;
        }
        if(request()->f_name!=null && request()->l_name!=null){
            $user->username=Str::slug((request()->f_name).'_'.(request()->l_name),'_');
        }
        if(request()->yob!=null){
            $user->yob=request()->yob;
        }
        if(request()->contact!=null){
            $country = Nation::where('country',request()->country)->first();
            $code = str_replace('+', '', substr($country->code, 0, 1)) . substr($country->code, 1);
            $originalStr = request()->contact;
            $prefix = substr($originalStr, 0, 1);
            $contact= str_replace('0', $code, $prefix) . substr($originalStr, 1);
            $user->contact=$contact;
            $user->country=request()->country;
        }
        if(request()->email!=null){
            $user->email=request()->email;
        }
        if(request()->biography!=null){
            $user->biography=request()->biography;
        }
        $user->update();
        return redirect()->back()->with('success','Success');
    }

    public function destroy(string $id)
    {
        //
    }
}
