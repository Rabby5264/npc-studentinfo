@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Result</h1>
                    </div>
                        <!-- Content Row -->
                        <div class="row">
                        <div class="col-md-12">
                            <form action="{{url('admin/result/show')}}" method="put">
                                {{ csrf_field() }}

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

@endsection