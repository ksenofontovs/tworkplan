<?php /** @var \App\Models\VisitLog $visitLog */ ?>

<tr>
    <td>{{ $visitLog->student()->first()->name }}</td>
    <td class="d-none d-sm-block">@lang('cms.students.subgroups.' . $visitLog->student()->first()->subgroup)</td>
    <td>{!! Form::checkbox('absent[' . $visitLog->student_id . ']', 1, $visitLog->absent, ['class' => 'form-control']) !!}</td>
    <td>{!! Form::number('mark[' . $visitLog->student_id . ']', $visitLog->mark, ['class' => 'form-control']) !!}</td>
</tr>
