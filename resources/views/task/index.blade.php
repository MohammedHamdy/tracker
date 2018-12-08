@extends('layouts.master')

@section('title') Projects @endsection

@section('body')
<h4><a href="{{ route('task.create', $project->id) }}">Create New Task In [ {{ $project->name }} ]</a></h4>
<h4><a href="{{ route('project.index') }}">Go To the Projects</a></h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>Task Name Name</th>
                     <th>created at</th>
                     <th>status</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    	
    	@forelse($data as $k => $task)
    <tr>
    <td>{{$task->name}}</td>
    <td>{{ $task->created_at }}</td>
    <td>{{ status($task->status) }}</td>
    <td><a href="{{ route('task.edit', [$project->id, $task->id]) }}" class="btn btn-primary">Edit</a></td>
    <td><a href="{{ route('task.delete', [$task->id]) }}" class="btn btn-danger">Delete</a></td>
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