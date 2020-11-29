@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit project:</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('project.update', $project->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Project name</label>
                            <input type="text" name="title" class="form-control" value="{{ $project->title }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
