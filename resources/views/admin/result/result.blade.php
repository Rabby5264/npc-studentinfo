@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Result</h1>
                    </div>
                        <!-- Content Row -->
                        <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('admin.result-extend.store') }}" method="POST">
                                @csrf

                                <div class="d-flex">
                                <div class="form-group col-md-6">
                                    <label for="">Student Roll</label>
                                    <input type="number" name="roll" class="form-control">
                                </div>
                                <button class="btn  btn-primary" type="submit">Enter</button>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Subject Code</label>
                                    <input type="number" name="code" class="form-control">
                                </div>

                                <div class="form-group col-md-6">        
                                    <label for="">Marks</label>
                                    <input type="number" name="marks" class="form-control">
                                </div>

                                <button class="btn btn-success" type="submit">Update</button>

                                <button class="btn btn-success" type="submit">Submit</button>

                            </form>
                         </div>
                         </div>

@endsection