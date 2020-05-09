<?php /** @var \App\Models\discipline $discipline */ ?>

<tr>
    <th scope="row">{{ $discipline->id }}</th>
    <td>{{ $discipline->title }}</td>
    <td>@lang('cms.groups.levels.' . $discipline->level)</td>
    <td>
        {!! Form::open(['route' => ['cms.disciplines.destroy', 'discipline' => $discipline->id], 'method' => 'DELETE',
            'onsubmit' => 'return confirm("' . __('cms.delete_confirm') . '")']) !!}
        {!! Form::submit(__('cms.delete'), ['class' => 'btn btn-sm btn-outline-danger']) !!}
        {!! Form::close() !!}
    </td>
</tr>
