@extends('layout.main')
@include('include.nav')
@section('content')

<div class="content-list" style="margin-top: -4px;">
    <div class="table-responsive" style="height: 590px; width:100%; overflow: auto; ">
        <table class="table table-bordered">
            <thead class="sticky-header">
                <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Middle name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Suffix</th>
                    <th scope="col">Gender</th>
					<th scope="col">Birthday</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Date Updated</th>

                    <th scope="col" style="width:16%; text-align:center;">Action</th>
                </tr>
            </thead>
            @include('include.message')
            <tbody>
                {{-- Database Data Here --}}
                @foreach ($users as $user)  
                    <tr>
						<td>{{ $user->first_name }}</td>
                        <td>{{ $user->middle_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->suffix_name }}</td>
                        <td>{{ $user->gender->gender }}</td>
						<td>{{ $user->birth_date }}</td>
						<td>{{ $user->email_address }}</td>
                        <td>{{ $user->created_at}}</td>
                        <td>{{ $user->updated_at}}</td>
                        <td style="text-align: right;">
                            <div class="btn-group">
                                <a href="/user/show/{{$user->user_id}}" class="btn btn-outline-primary">View</a>
                                <a href="/user/edit/{{$user->user_id}}" class="btn btn-outline-warning">Edit</a>
                                <a href="#" class="btn btn-outline-danger delete-btn" data-id="{{ $user->user_id }}" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $user->user_id }}">Delete</a>

                            </div>
                        </td>
                    </tr>
                    @include('user.delete', ['user_id' => $user->user_id])
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

