<div class="form-group">
    {!! Form::label('FirstName', 'First Name:') !!}
    {!! Form::text('FirstName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('LastName', 'Last Name:') !!}
    {!! Form::text('LastName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Enter Password:') !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Confirm Password', 'Confirm Password:') !!}
    {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('permissions', 'Permissions:') !!}
    {!! Form::select('permission_ids[]', $permissionsArray, $activePermissions, ['class' => 'form-control', 'id'=> 'permissions', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('select').select2();
    </script>
@endsection