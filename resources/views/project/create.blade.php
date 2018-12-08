@extends('layouts.master')

@section('title') Create Project @endsection

@section('body')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create project</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! 
              Form::open([
                'url'    => route('project.store'),
                'method' => 'POST',
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