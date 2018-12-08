@extends('layouts.master')

@section('title') task Project @endsection

@section('body')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">task project</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           {!! 
              Form::model($data, [
                'route'  => ['task.update', $project->id, $data->id],
                'method' => 'PATCH',
                'role'   => 'form',
                'files'   => true
              ])
             !!}
             <div class="box-body">

                @include('task.form')

                
                 {!! Form::close() !!}
            </div>
          </div>
@endsection