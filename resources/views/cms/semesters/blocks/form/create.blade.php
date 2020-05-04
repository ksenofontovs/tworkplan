{!! Form::open(['route' => 'cms.semesters.store']) !!}
@include('cms.semesters.blocks.form.blocks.fields')
{!! Form::submit(__('cms.create'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
