@extends('layouts.master')

@section('title') Delete task @endsection

@section('body')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Delete task</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
             <div class="box-body">

                  <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      {{ $data->name }}
                    </div>
                    <div class="panel-body">
                      <p>Are you sure ?</p>
                      {!! 
                        Form::open([
                        'url'    => route('task.destroy', [$data->project_id,$data->id]),
                        'method' => 'DELETE'
                        ]);
                       !!}

                       <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Yes</button>
                        <a href="{{ route('task.index', $data->project_id) }}" class="btn btn-default">Cancel</a>
                      </div>

                       {!! Form::close() !!}
                    </div>
                  </div>
                </div>

            </div>
          </div>
@endsection