@extends('layout.main')
@include('include.nav')
@section('content')

<div class="container">
    <form action="/user/update/{{ $user->user_id }}" method="post" class="row g-3" style="margin: 2% 5%">
        @csrf
        @method('PUT')
        <div class="col-md-4">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
        </div>
        <div class="col-md-2">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $user->middle_name }}">
        </div>
        <div class="col-md-4">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">
        </div>
        <div class="col-md-2">
            <label for="suffix_name" class="form-label">Suffix Name</label>
            <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{ $user->suffix_name }}">
        </div>
        <div class="col-md-6 col-lg-2">
          <label for="birth_date" class="form-label">Birth Date</label>
          <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $user->birth_date }}">
      </div>
      <div class="col-md-6 col-lg-2">
            <label for="gender_id" class="form-label">Gender</label>
            <select class="form-select" id="gender_id" name="gender_id">
                @foreach($genders as $gender)
                    <option value="{{ $gender->gender_id }}" @if($user->gender_id == $gender->gender_id) selected @endif>{{ $gender->gender }}</option>
                @endforeach
            </select>
        </div>  
    
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
        </div>
        <div class="col-md-6">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $user->contact_number }}">
        </div>
        <div class="col-md-6">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email_address" name="email_address" value="{{ $user->email_address }}">
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/users" class="btn btn-outline-danger">Cancel</a>
        </div>
    </form>
</div>

@endsection
