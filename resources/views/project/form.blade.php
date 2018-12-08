
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




<div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
    </div>