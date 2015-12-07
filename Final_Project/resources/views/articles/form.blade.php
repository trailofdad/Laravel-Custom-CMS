
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('html', 'HTML:') !!}
    {!! Form::textarea('html', null, ['class' => 'form-control', 'id'=>'tiny']) !!}
</div>


<div class="form-group">
    {!! Form::label('pages', 'Pages:') !!}
    {!! Form::select('pages', $pages, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contentAreas', 'Content Area:') !!}
    {!! Form::select('contentAreas', $contentAreas, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>



@section('footer')

@endsection
