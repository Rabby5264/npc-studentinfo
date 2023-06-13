@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Subjects</h1>
                        <a href="{{ route('admin.subjects.create') }}" class="btn btn-success"> Create Subject </a>
                    </div>
                    

<!-- Content Row -->
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.subjects.store') }}" method="POST">
        @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" >
    </div>
    <div class="form-group">
        <label for="">Code</label>
        <input type="number" name="code" class="form-control">
    </div>
    <div class="form-group">        
        <label for="">Marks</label>
        <input type="number" name="marks" class="form-control">
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
</form>
</div>
</div>



@endsection