@extends('layouts.master')

@section('title') Create Project @endsection

@section('body')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create project</h3>
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
                        'url'    => route('project.destroy', $data->id),
                        'method' => 'DELETE'
                        ]);
                       !!}

                       <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Yes</button>
                        <a href="{{ route('project.index') }}" class="btn btn-default">Cancel</a>
                      </div>

                       {!! Form::close() !!}
                    </div>
                  </div>
                </div>

            </div>
          </div>
@endsection