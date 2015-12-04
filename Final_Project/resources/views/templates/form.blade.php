<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    {!! Form::select('Active', array('Y' => 'Yes', 'N' => 'No'), 'N', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('css', 'CSS:') !!}
    {!! Form::textarea('CSS', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')

@endsection