@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User</h1>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success"> New User </a>
                    </div>
                    

<!-- Content Row -->
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" >
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" >
    </div>
    <div class="form-group">
        <label>Role</label>
        <select class="form-control" name="role">
          <option selected>Choose...</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
    <div class="form-group">        
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
</form>
</div>
</div>



@endsection