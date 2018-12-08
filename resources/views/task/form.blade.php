
<div class="form-group">
    <label for="name">Name</label>
    {!! Form::text("name", null, [
      'class' => 'form-control',
      'placeholder' =>  'Name',
      'required'
      ]) !!}	

      @if ($errors->has('name'))
        <span class="help-block">
             <strong>{{ $errors->first('name') }}</strong>
        </span>
      @endif   
</div>

<div class="form-group">
    <label for="project">Project</label>
    {!! Form::select("project_id", $projects,null, [
      'class' => 'form-control',
      ]) !!}  

      @if ($errors->has('project'))
        <span class="help-block">
             <strong>{{ $errors->first('project') }}</strong>
        </span>
      @endif   
</div>

<div class="form-group">
    <label for="Status">Status</label>
    {!! Form::select("status", ['in_progress' => 'In Progress', 'done' => 'Done'],null, [
      'class' => 'form-control',
      ]) !!}  

      @if ($errors->has('status'))
        <span class="help-block">
             <strong>{{ $errors->first('status') }}</strong>
        </span>
      @endif   
</div>


<div class="form-group">
    <label for="comment">Comment</label>
    {!! Form::textarea("comment", null, [
      'class' => 'form-control',
      'placeholder' =>  'Comment',
      ]) !!}  

      @if ($errors->has('comment'))
        <span class="help-block">
             <strong>{{ $errors->first('comment') }}</strong>
        </span>
      @endif   
</div>




<div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
    </div>