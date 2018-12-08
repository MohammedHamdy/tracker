@extends('layouts.master')

@section('title') Projects @endsection

@section('body')
<h4><a href="{{ route('project.create') }}">Create New Projects</a></h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>Project Name</th>
                    <th>Creator</th>
                     <th>created at</th>
                     <th>status</th>
                     <th>Tasks</th>
                     <th>Details</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    	
    	@forelse($data as $k => $project)
    <tr>
    <td>{{$project->name}}</td>
    <td>{{ $project->user->name }}</td>
    <td>{{ $project->created_at }}</td>
    <td>{{ $project->status }} %</td>
    <td><a href="{{ route('task.index', $project->id) }}" class="btn btn-info">Tasks</a></td>
    <td><a href="{{ route('project.show', $project->id) }}" class="btn btn-info">Show</a></td>
    <td><a href="{{ route('project.edit', $project->id) }}" class="btn btn-primary">Edit</a></td>
    <td><a href="{{ route('project.delete', $project->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>

    @empty
    <tr ><td colspan="4" class="text-center">No data Found !!</td></tr>
    @endforelse

   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
{{ $data->links() }}
                
            </div>
@endsection