@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Student</h1>
                        <a href="{{ route('admin.student.create') }}" class="btn btn-success"> New Student </a>
                    </div>
                    

<!-- Content Row -->
<div class="row">
<div class="col-md-12">
    <form action="{{ route('admin.student.store') }}" method="POST">
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
        <label for="">Roll</label>
        <input type="number" name="roll" class="form-control">
    </div>
    <div class="form-group col-md-12 d-flex">
        <div class="col-md-6">
            <label selected>Depertment</label>
    
            <select class="form-select" aria-label="Default select example" name="department" required>
            
            <option value="Computer">Computer</option>
            <option value="Civil">Civil</option>
            <option value="Electrical">Electrical</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Textile">Textile</option>
            <option value="Garments">Garments</option>
          </select>
        </div>
    
        <div class="col-md-6">
            <label selected>Semester</label>
        
            <select class="form-select" aria-label="Default select example" name="semester" required>
            
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
            <option value="5th">5th</option>
            <option value="6th">6th</option>
            <option value="7th">7th</option>
            <option value="8th">8th</option>
            </select>
        </div>
    </div>

    <div class="form-group">        
        <label for="">Session</label>
        <input type="number" name="session" class="form-control">
    </div>


    <button class="btn btn-success" type="submit">Submit</button>
</form>
</div>
</div>



@endsection