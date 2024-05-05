<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'f_name'=>['required', 'string', 'max:255'],
            'l_name'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'f_name'=>$data['f_name'],
            'm_name'=>$data['m_name'],
            'l_name'=>$data['l_name'],
            'username'=>Str::slug($data['f_name'].'_'.$data['l_name'],'_'),
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
    }
}
