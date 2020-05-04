{!! Form::open(['route' => 'cms.groups.store']) !!}
@csrf
@include('cms.groups.blocks.form.blocks.fields')
{!! Form::submit(__('cms.create'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
