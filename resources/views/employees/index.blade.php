@extends('layouts.app')
@section('content')
<div class="card-body">
    <form class="form-inline" action="{{ route('employees.index') }}" method="GET">
        <select name="project_id" id="" class="form-control">
            <option value="" selected disabled>Select Project:</option>
            @foreach ($projects as $project)
            <option value="{{ $project->id }}" 
                @if($project->id == app('request')->input('project_id')) 
                    selected="selected" 
                @endif>{{ $project->title }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="card card-body">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Project</th>
            <th>Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->surname }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->project->title }}</td>
            <td>
                <form class="form-inline" action={{ route('employees.destroy', $employee->id) }} method="POST">
                    <a class="btn btn-success m-1" href={{ route('employees.edit', $employee->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger m-1" value="Delete" />
                </form>

            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('employees.create') }}" class="btn btn-success">Add employee</a>
    </div>
</div>
@endsection