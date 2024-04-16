@extends('layout.main')
@include('include.nav')

@section('content')

<title>View User | Demo App</title>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View User</h5>
                    <form action="#" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="First Name: {{$user->first_name}}" readonly style="border: none; outline:none"> 
                                    @error('first_name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="Middle Name: {{$user->middle_name}}" readonly style="border: none; outline:none"> 
                                    @error('middle_name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="Last Name: {{$user->last_name}}" readonly style="border: none; outline:none"> 
                                    @error('last_name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="Suffix Name: {{$user->suffix_name}}" readonly style="border: none; outline:none"> 
                                    @error('suffix_name') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="birth_date" name="birth_date" value="Birth Date: {{$user->birth_date}}" readonly style="border: none; outline:none"> 
                                    @error('birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="gender" name="gender" value="Gender: {{$user->gender->gender}}" readonly style="border: none; outline:none"> 
                                    @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="address" name="address" value="Address: {{$user->address}}" readonly style="border: none; outline:none"> 
                                    @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="contact_number" name="contact_number" value="Contact Number: {{$user->contact_number}}" readonly style="border: none; outline:none"> 
                                    @error('contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="email_address" name="email_address" value="Email Address: {{$user->email_address}}" readonly style="border: none; outline:none"> 
                                    @error('email_address') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="username" name="username" value="Username: {{$user->username}}" readonly style="border: none; outline:none"> 
                                    @error('username') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <a href="/users" class="btn btn-outline-primary col-12">Go back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
