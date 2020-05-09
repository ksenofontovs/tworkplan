<?php /** @var \App\Models\Student $student */ ?>

<tr>
    <th scope="row">{{ $student->id }}</th>
    <td>{{ $student->name }}</td>
    <td>{{ $student->group()->first()->title }}</td>
    <td>@lang('cms.students.subgroups.' . $student->subgroup)</td>
    <td>
        {!! Form::open(['route' => ['cms.students.destroy', 'student' => $student->id], 'method' => 'DELETE',
            'onsubmit' => 'return confirm("' . __('cms.delete_confirm') . '")']) !!}
        {!! Form::submit(__('cms.delete'), ['class' => 'btn btn-sm btn-outline-danger']) !!}
        {!! Form::close() !!}
    </td>
</tr>
