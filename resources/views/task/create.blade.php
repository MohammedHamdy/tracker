@extends('layouts.master')

@section('title') Create Task @endsection

@section('body')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Task in [ {{ $project->name }} ]</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! 
              Form::open([
                'url'    => route('task.store', $project->id),
                'method' => 'POST',
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