<?php /** @var \App\Models\Schedule $schedule */ ?>

<tr>
    <td>{{ $schedule->lessonTime()->first()->time_start }} - {{ $schedule->lessonTime()->first()->time_end }}</td>
    <td>{{ $schedule->discipline()->first()->title }}</td>
    <td>{{ $schedule->lessonType()->first()->title }}</td>
    <td>{{ $schedule->group()->first()->title }}</td>
    <td>@lang('cms.students.subgroups.' . $schedule->subgroup)</td>
    <td>@lang('cms.type_loads.' . $schedule->type_load)</td>
    <td>{{ $schedule->audience }}</td>
    <td>@lang('cms.half_lessons.' . $schedule->half_lesson)</td>

    <td>
        {{ link_to(route('cms.schedules.edit', ['schedule' => $schedule->id]), __('cms.edit')) }}
    </td>
</tr>
