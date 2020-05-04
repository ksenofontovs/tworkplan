{!! Form::model($group, ['url' => route('cms.groups.update', ['group' => $group->id]), 'method' => 'PATCH']) !!}
@include('cms.groups.blocks.form.blocks.fields')
{!! Form::submit(__('cms.save'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
