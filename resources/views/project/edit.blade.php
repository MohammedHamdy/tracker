@extends('layouts.master')

@section('title') Update Project @endsection

@section('body')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upate project</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           {!! 
              Form::model($data, [
                'route'  => ['project.update', $data->id],
                'method' => 'PATCH',
                'role'   => 'form',
                'files'   => true
              ])
             !!}
             <div class="box-body">

                @include('project.form')

                
                 {!! Form::close() !!}
            </div>
          </div>
@endsection