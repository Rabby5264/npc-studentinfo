@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Subjects</h1>
                        <a href="{{ route('admin.subjects.create') }}" class="btn btn-success"> Create Subject </a>
                    </div>

<!-- Content Row -->
<div class="row">
<div class="col-md-12">
    <table class="table">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>code</td>
            <td>marks</td>
            <td>Action</td>
        </tr> 

        @php $id=1; @endphp
        @foreach ($subjects as $row )
        <tr>
            <td>{{$id++}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->code}}</td>
            <td>{{$row->marks}}</td>
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