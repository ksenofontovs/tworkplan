<?php /** @var \App\Models\discipline $discipline */ ?>

<tr>
    <th scope="row">{{ $discipline->id }}</th>
    <td>{{ $discipline->title }}</td>
    <td>@lang('cms.groups.levels.' . $discipline->level)</td>
    <td>
        {{ link_to(route('cms.disciplines.edit', ['discipline' => $discipline->id]), __('cms.edit')) }}
    </td>
</tr>
