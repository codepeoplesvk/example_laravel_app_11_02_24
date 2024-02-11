@extends('layouts.app')
@section('title', 'One Page App')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <h5 class="card-title">User Detilas</h5>
            <div class="col-md-4 col-lg-4">
                <form action="{{ route('users.sort') }}" method="POST">
                    @csrf


                    <div class="form-group">

                        <select name="sort" >

                            <option value="id">Id </option>
                            <option value="name"> Name</option>

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Sort by..." class="btn btn-primary">


                        </div>
                    </div>


                </form>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>


                        <th scope="col">Image</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($users ?? [] as $key => $user)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $user->name ?? '' }}</td>

                            <td>
                                <div
                                    style="background-image: url('{{ Storage::url($user->image) }}');min-height:100px; text-align:center;">
                                </div>
                            </td>
                            <td>{{ $user->address ?? '' }}</td>

                            <td>{{ $user->gender == 1 ? 'Male' : 'Female' }}</td>
                            <td>
                                <a href="{{ route('users.edit', ['user' => $user->id ?? '']) }}" class="btn btn-primary">
                                    Edit</a>



                                <form action="{{ route('users.destroy', ['user' => $user->id ?? '']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="Delete" class="btn btn-danger">


                                </form>
                                <a href="{{ route('users.show', ['user' => $user->id ?? '']) }}" class="btn btn-info">
                                    View</a>



                            </td>



                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div class="container">
        @if ($user_details ?? '')
            <h1> User Details</h1>
            {{ $user_details->name ?? '' }}
            <div class="col-4">
                <img src="{{ ($user_details->image ?? '') != null ? Storage::url($user_details->image) : '' }}"
                    class="img-thumbnail avatar" />
            </div>
            {{ $user_details->address }}
            {{ $user_details->gender == 1 ? 'Male' : 'Female' }}
        @else
            <div class="row">

                @if ($user_info ?? '')
                    <h1> Edit User Info</h1>
                    <form action="{{ route('users.update', ['user' => $user_info->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <h1> Add New User</h1>
                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @endif
                @csrf


                <div class="row p-8">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                value="{{ $user_info->name ?? '' }}">

                        </div>
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                        <div class="form-group">

                            <div class="col 3">
                                <label>Image </label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            @error('image')
                                <div class="alert alert-danger"> {{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-4">
                            <img src="{{ ($user_info->image ?? '') != null ? Storage::url($user_info->image) : '' }}"
                                class="img-thumbnail avatar" />
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address" rows="3">{{ $user_info->address ?? '' }}</textarea>
                        </div>
                        @error('address')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                            {{ ($user_info->gender ?? '') == 1 ? 'checked' : '' }} id="exampleRadios1" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                            {{ ($user_info->gender ?? '') == 2 ? 'checked' : '' }} id="exampleRadios2" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                            Female
                        </label>
                    </div>
                    @error('gender')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" name="submit" class="btn btn-success submitBtn"
                                value="{{ ($user_info ?? '') == '' ? 'Submit' : 'Update' }}" />
                        </div>
                    </div>
                    </form>
                </div>
        @endif
    </div>

@endsection
