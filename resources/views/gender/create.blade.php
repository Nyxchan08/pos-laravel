@extends('layout.main')
@include('include.nav')
@section('content')

<title>Add Gender | Demo App</title>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-5 col-md-8 col-sm-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Gender</h5>
                    <form action="/gender/store" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender">
                            @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                        <a href="/genders" class="btn btn-outline-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
