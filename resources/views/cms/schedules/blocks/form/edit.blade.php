{!! Form::model($schedule, ['url' => route('cms.schedules.update', ['schedule' => $schedule->id]), 'method' => 'PATCH']) !!}
@include('cms.schedules.blocks.form.blocks.fields')
{!! Form::submit(__('cms.save'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
