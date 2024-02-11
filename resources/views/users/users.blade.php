<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <h5 class="card-title">User Detilas</h5>
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

                            <td ><div style="background-image: url('{{ Storage::url($user->image) }}');min-height:100px; text-align:center;"></div></td>
                            <td>{{ $user->address ?? '' }}</td>

                            <td>{{ $user->gender == 1 ? 'Male' : 'Female' }}</td>
                            <td>
                                <button class="btn btn-primary"><a
                                        href="{{ route('users.edit', ['user' => $user->id ?? '']) }}"> UPDATE</a>


                                </button>
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', ['user' => $user->id ?? '']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="Delete" class="btn btn-primary">


                                </form>

                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <form name="registration_form" accept="{{ route('users.store') }}" id="registration_form" method="POST"
                enctype="multipart/form-data">
                @csrf


                <div class="row p-8">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="">

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

                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address" rows="3"></textarea>
                        </div>
                        @error('address')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="2">
                        <label class="form-check-label" for="exampleRadios2">
                            Female
                        </label>
                    </div>
                    @error('gender')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" name="submit" class="btn btn-success submitBtn" value="SUBMIT" />
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>
