{!! Form::model($semester, ['url' => route('cms.semesters.update', ['semester' => $semester->id]), 'method' => 'PATCH']) !!}
@include('cms.semesters.blocks.form.blocks.fields')
{!! Form::submit(__('cms.save'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
