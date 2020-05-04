<?php /** @var \App\Models\Group $group */ ?>

<tr>
    <th scope="row">{{ $group->id }}</th>
    <td>{{ $group->specialization }}</td>
    <td>@lang('cms.groups.levels.' . $group->level)</td>
    <td>{{ $group->year }}</td>
    <td>
        {{ link_to(route('cms.groups.edit', ['group' => $group->id]), __('cms.edit')) }}
        {{ link_to(route('cms.students.index', ['group_id' => $group->id]), __('cms.students.students')) }}
    </td>
</tr>
