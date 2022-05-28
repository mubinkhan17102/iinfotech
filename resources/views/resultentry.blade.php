@extends('master.main')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="resultentry">
                    <h3>Student Result Entry</h3>
                    <form id='myform'>
                        @csrf
                        <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label class="form-label"><Picture></Picture></label>
                        <div class="form-control">
                            <input type="file">
                        </div>
                        <table class="table my-5">
                            <thead>
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Number</th>
                                <th scope="col">
                                    <button type="button" class="btn btn-primary btn-sm" id="addresult">Add More</button>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="resultentry">
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected value="Bangla">Bangla</option>
                                            <option value="English">English</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" value="10" name="number">
                                    </td>
                                    <td>
                                        <button class="btn btn-small btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected value="Bangla">Bangla</option>
                                            <option value="English">English</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" value="10" name="number">
                                    </td>
                                    <td>
                                        <button class="btn btn-small btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection