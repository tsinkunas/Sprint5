@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Add employee:</div>
               <div class="card-body">
                   <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Surname: </label>
                            <input type="text" name="surname" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="text" name="email" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Phone: </label>
                            <input type="text" name="phone" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Project: </label>
                            <select name="project_id" id="" class="form-control">
                                 <option value="" selected disabled>Select Project</option>
                                 @foreach ($projects as $project)
                                 <option value="{{ $project->id }}">{{ $project->title }}</option>
                                 @endforeach
                            </select>
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection