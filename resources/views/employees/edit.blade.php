@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editing employee information</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label>Name: </label>
                            <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                        </div>
                        <div class="form-group">
                            <label>Surname: </label>
                            <input type="text" name="surname" class="form-control" value="{{ $employee->surname }}"> 
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="text" name="email" class="form-control" value="{{ $employee->email }}"> 
                        </div>
                        <div class="form-group">
                            <label>Phone: </label>
                            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}"> 
                        </div>
                        <div class="form-group">
                            <label>Project: </label>
                            <select name="project_id" id="" class="form-control">
                                 <option value="" selected disabled>Select Project</option>
                                 @foreach ($projects as $project)
                                <option value="{{ $project->id }}" @if($project->id == $employee->project_id) selected="selected" @endif>{{ $project->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection