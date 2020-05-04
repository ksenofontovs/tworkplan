<?php /** @var \App\Models\Student $student */ ?>

<tr>
    <th scope="row">{{ $student->id }}</th>
    <td>{{ $student->name }}</td>
    <td>{{ $student->group_id }}</td>
    <td>@lang('cms.students.subgroups.' . $student->subgroup)</td>
    <td>
        {{ link_to(route('cms.students.edit', ['student' => $student->id]), __('cms.edit')) }}
    </td>
</tr>
