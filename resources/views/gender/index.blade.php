@extends('layout.main')
@include('include.nav')
@section('content')

<div class="content-list" style="margin-top: -4px;">
    <div class="table-responsive" style="height: 590px; width:100%; overflow: auto; ">
        <table class="table table-bordered">
            <thead class="sticky-header">
                <tr>
                    <th scope="col">Gender</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Date Updated</th>
                    <th scope="col" style="width:16%; text-align:center;">Action</th>
                </tr>
            </thead>
            @include('include.message')
            <tbody>
                {{-- Database Data Here --}}
                @foreach ($genders as $gender)  
                    <tr>
                        <td>{{ $gender->gender }}</td>
                        <td>{{ $gender->created_at}}</td>
                        <td>{{ $gender->updated_at}}</td>
                        <td style="text-align: right;">
                            <div class="btn-group">
                                <a href="/gender/show/{{$gender->gender_id}}" class="btn btn-outline-primary">View</a>
                                <a href="/gender/edit/{{$gender->gender_id}}" class="btn btn-outline-warning">Edit</a>
                                <a href="#" class="btn btn-outline-danger delete-btn" data-id="{{ $gender->gender_id }}" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $gender->gender_id }}">Delete</a>

                            </div>
                        </td>
                    </tr>
                    @include('gender.delete', ['gender_id' => $gender->gender_id])
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .sticky-header th {
    position: sticky;
    top: 0;
    background-color: #ffffff;
    z-index: 1;
}

</style>


@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteForm = document.querySelectorAll('.delete-form');

    deleteForm.forEach(form => {
        form.addEventListener('submit', function (e) {
        });
    });
});

</script>
@endsection

