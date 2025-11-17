<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $userTypes = [
            'household' => 'Household User',
            'farmer' => 'Commercial Farmer',
            'school' => 'School/Institution',
            'business' => 'Agribusiness'
        ];

        return view('auth.register', [
            'title' => 'Sign Up - Passage Greens',
            'description' => 'Create your Passage Greens account to start your smart farming journey.',
            'userTypes' => $userTypes
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'user_type' => 'required|in:household,farmer,school,business',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'agree_terms' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
            'phone' => $request->phone,
            'location' => $request->location,
        ]);

        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Welcome to Passage Greens! Your account has been created successfully.');
    }
}
