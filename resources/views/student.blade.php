@extends('master.main')

@section('content')
    <div class="container mt-5">
        <div class='m-auto'>
            <div class='row d-flex flex-row  justify-content-center align-self-center'>
                <div class='col-md-6 col-sm-12'>
                    <h3 class='text-center'>Login Here</h3>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder='Enter Username' >
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder='Enter Password'>
                        </div>
                        <button type="submit" class="btn btn-success w-100 submitbtn">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection