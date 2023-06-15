@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Result</h1>
                    </div>

                    
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <form action="{{ url('/admin/result-extend') }}" method="POST">
            @csrf

        <div class="d-flex">
            <div class="form-group col-md-6">
                <label for="">Student Roll</label>
                <input type="number" name="roll" class="form-control">
            </div>
        </div>                               
         <button class="btn btn-success" type="submit">Submit</button>
        </form>
     </div>
     </div>
     <div class="row">
        <h4>Student Info : </h4>
        <br>
        <br>
        <div class="col-md-12 d-flex">
            <h5 class="col-md-6">Student Name : </h5>
            <h5 class="col-md-6">Department : </h5>
        </div>
        <div class="col-md-12 d-flex">
            <div class="col-md-6 d-flex">
                <label selected><h5>Semester</h5></label>
            
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
            <h5 class="col-md-6">Session : </h5>
        </div>
     </div>



@endsection