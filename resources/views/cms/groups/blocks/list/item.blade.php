<?php /** @var \App\Models\Group $group */ ?>

<tr>
    <th scope="row">{{ $group->id }}</th>
    <td>{{ $group->specialization }}</td>
    <td>@lang('cms.groups.levels.' . $group->level)</td>
    <td>{{ $group->year }}</td>
    <td>
        <div class="row block">
        {{ link_to(route('cms.students.index', ['group_id' => $group->id]), __('cms.students.students'), ['class' => 'btn btn-sm btn-primary mr-2']) }}
        {!! Form::open(['route' => ['cms.groups.destroy', 'group' => $group->id], 'method' => 'DELETE',
            'onsubmit' => 'return confirm("' . __('cms.delete_confirm') . '")']) !!}
        {!! Form::submit(__('cms.delete'), ['class' => 'btn btn-sm btn-outline-danger']) !!}
        {!! Form::close() !!}
        </div>
    </td>
</tr>
