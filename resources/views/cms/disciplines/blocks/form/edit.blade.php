{!! Form::model($discipline, ['url' => route('cms.disciplines.update', ['discipline' => $discipline->id]), 'method' => 'PATCH']) !!}
@include('cms.disciplines.blocks.form.blocks.fields')
{!! Form::submit(__('cms.save'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
