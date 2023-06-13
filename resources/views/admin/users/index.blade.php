@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success"> New User </a>
                    </div>

<!-- Content Row -->
<div class="row">
<div class="col-md-12">
    <table class="table">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>role</td>
            <td>Action</td>
        </tr> 

        @php $id=1; @endphp
        @foreach ($users as $row )
        <tr>
            <td>{{$id++}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->role}}</td>
            <td>{{$row->email}}</td>
            <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>

        </tr>  

        @endforeach 
    </thead>
</div>
</div>



@endsection