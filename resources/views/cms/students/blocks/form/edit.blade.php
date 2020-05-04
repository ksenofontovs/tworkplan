{!! Form::model($student, ['url' => route('cms.students.update', ['student' => $student->id]), 'method' => 'PATCH']) !!}
@include('cms.students.blocks.form.blocks.fields')
{!! Form::submit(__('cms.save'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
