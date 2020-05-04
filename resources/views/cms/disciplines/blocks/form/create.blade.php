{!! Form::open(['route' => 'cms.disciplines.store']) !!}
@include('cms.disciplines.blocks.form.blocks.fields')
{!! Form::submit(__('cms.create'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
