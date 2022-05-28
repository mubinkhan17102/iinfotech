@extends('master.main')

@section('content')
<div class="container mt-5">
    <a href="resultentry" class="btn btn-primary">Add New</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SI</th>
                <th scope="col">Image</th>
                <th scope="col">Student Name</th>
                <th scope="col">Total</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student['id']}}</th>
                    <td><img src="{{$student['image']}}" alt=""></td>
                    <td>{{$student['name']}}</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary">view</button>
                        <button type="button" class="btn btn-sm btn-warning">Edit</button>
                        <button type="button" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection