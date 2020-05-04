{!! Form::open(['route' => 'cms.students.store']) !!}
@include('cms.students.blocks.form.blocks.fields')
{!! Form::submit(__('cms.create'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
