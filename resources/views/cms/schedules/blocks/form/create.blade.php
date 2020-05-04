{!! Form::open(['route' => 'cms.schedules.store']) !!}
@include('cms.schedules.blocks.form.blocks.fields')
{!! Form::submit(__('cms.create'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
