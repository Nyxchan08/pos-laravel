@extends('layout.main')
@include('include.nav')

@section('content')

<title>View Gender | Demo App</title>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-5 col-md-8 col-sm-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View Gender</h5>
                    <form action="#" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" id="gender" name="gender" value="Gender: {{$gender->gender}}" readonly style="border: none; outline:none"> 
                            @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <a href="/genders" class="btn btn-outline-primary col-12">Go back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
