@extends('layouts.master')

@section('title') Tasks @endsection

@section('body')
<h4><a href="{{ route('task.create', $data->project_id) }}">Create New Tasks</a></h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>Task Name</th>
                     <th>created at</th>
                     <th>status</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
        
    <tr>
    <td>{{$data->name}}</td>
    <td>{{ $data->created_at }}</td>
    <td>{{ status($data->status) }}</td>
    <td><a href="{{ route('task.edit', [$data->project_id,$data->id]) }}" class="btn btn-primary">Edit</a></td>
    <td><a href="{{ route('project.delete', $data->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>
 

   
    
   
    
    </tbody>
        
</table>




                
            </div>
@endsection