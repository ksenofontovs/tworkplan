<?php /** @var \App\Models\Student $student */ ?>

<tr>
    <td>{{ $student->name }}</td>
    <td class="d-none d-sm-block">@lang('cms.students.subgroups.' . $student->subgroup)</td>
    <td>{!! Form::checkbox('student_absent_' . $student->id, 1, null, ['class' => 'form-control']) !!}</td>
    <td>{!! Form::number('student_mark_' . $student->id, null, ['class' => 'form-control']) !!}</td>
    <td>

    </td>
</tr>
