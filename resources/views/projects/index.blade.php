@extends('layouts.app')
@section('content')
<div class="card card-body">
    <table class="table">
        <tr>
            <th>Project</th>
            <th>Employees</th>
            <th>Action</th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>
                @foreach ($project->employees as $project)
                    <span class="nice">
                        {{ $project->name }} {{ $project->surname }}
                        @if( !$loop->last)
                        ,
                        @endif
                    </span>
                @endforeach
            </td>
            <td>
                <form action={{ route('project.destroy', $project->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('project.edit', $project->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('project.create') }}" class="btn btn-success">Add Project</a>
    </div>
</div>
@endsection