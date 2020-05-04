<?php /** @var \App\Models\Schedule $schedule */ ?>

<tr>
    <th scope="row">{{ $schedule->id }}</th>
    <td>{{ $schedule->group()->first()->title }}</td>
    <td>@lang('cms.students.subgroups.' . $schedule->subgroup)</td>
    <td>{{ $schedule->discipline()->first()->title }}</td>
    <td>{{ $schedule->lessonType()->first()->title }}</td>
    <td>@lang('cms.odd_evens.' . $schedule->odd_even)</td>
    <td>@lang('cms.half_lessons.' . $schedule->odd_even)</td>
    <td>{{ $schedule->semester()->first()->date_start }} - {{ $schedule->semester()->first()->date_end }}</td>
    <td>{{ $schedule->lessonDay()->first()->title }}</td>
    <td>{{ $schedule->lessonTime()->first()->time_start }} - {{ $schedule->lessonTime()->first()->time_end }}</td>
    <td>@lang('cms.type_loads.' . $schedule->type_load)</td>
    <td>{{ $schedule->audience }}</td>
    <td>
        {{ link_to(route('cms.schedules.edit', ['schedule' => $schedule->id]), __('cms.edit')) }}
    </td>
</tr>
