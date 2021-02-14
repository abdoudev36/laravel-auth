<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
        ];
    }

    /**
     * @Create new user
     */
    public function createUser()
    {
        Request::validate([
            'username'      => 'required|min:5|unique:users,name',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|min:6',
            're_password'   => 'required_with:password|same:password',
        ]);

        User::create([
            'name'      => $this->username,
            'email'     => $this->email,
            'password'  => Hash::make($this->password),
        ]);

        Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        return redirect()->route('home');
    }

    /**
     * @Create new user
     */
    public function login()
    {
        Request::validate([
            'email'         => 'required|email',
            'password'      => 'required',
        ]);

        $auth = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if(!$auth)
        {
            return redirect()->back()->with('error', 'invalid login credentials');
        }

        return redirect()->route('home');
    }
}
