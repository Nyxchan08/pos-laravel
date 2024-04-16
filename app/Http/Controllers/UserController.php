<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        $users = User::all(); 

        return view('user.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::with('gender')->findOrFail($id);
        return view('user.show', compact('user'));
    }
    

    public function create() {
        $genders = Gender::all();
        return view('user.create', compact('genders'));
    }    
    

    public function store(Request $request) {
        $validated = $request->validate([
            'first_name' => ['required'],
            'middle_name' => ['required'],
            'last_name' => ['required'],
            'suffix_name' => ['required'],
            'birth_date' => ['required', 'date'], 
            'gender_id' => ['required', 'integer'], 
            'address' => ['required'],
            'contact_number' => ['required'],
            'email_address' => ['required', 'email'], 
            'username' => ['required'],
            'password' => ['required']
        ]);
        
        User::create($validated);
    
        return redirect('/users')->with('message_success', 'User successfully saved.');
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $genders = Gender::all();
        return view('user.edit', compact('user', 'genders'));
    }
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => ['required'],
            'middle_name' => ['required'],
            'last_name' => ['required'],
            'suffix_name' => ['required'],
            'birth_date' => ['required', 'date'], 
            'gender_id' => ['required', 'integer'], 
            'address' => ['required'],
            'contact_number' => ['required'],
            'email_address' => ['required', 'email'], 
            'username' => ['required']
        ]);
    
        $userData = [
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'suffix_name' => $request->input('suffix_name'),
            'birth_date' => $request->input('birth_date'),
            'gender_id' => $request->input('gender_id'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('contact_number'),
            'email_address' => $request->input('email_address'),
            'username' => $request->input('username'),
        ];
    
        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }
    
        $user->update($userData);
    
        return redirect('/users')->with('message_success', 'User updated successfully');
    }
    


    public function delete($id) {
        $user = User::find($id); 

        return view('user.delete', compact('user'));

    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect('/users')->with('message_success', 'User successfully deleted.');
    }
    
}
