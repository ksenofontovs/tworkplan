<?php /** @var \App\Models\Schedule $schedule */ ?>

<div class="row">
    <div class="col-sm">
        Дисциплина: <span class="badge-pill badge-primary">{{ $schedule->discipline()->first()->title }}</span>
    </div>
    <div class="col-sm">
        {{ $schedule->group()->first()->title }}
        @if ($schedule->subgroup)
            <span class="badge-pill badge-secondary">Подгруппа @lang('cms.students.subgroups.' . $schedule->subgroup)</span>
        @endif
    </div>
    <div class="col-sm">
        <span class="badge-pill badge-success">{{ $schedule->lessonType()->first()->title }}</span>
    </div>
</div>
<div class="row py-2">
    <div class="col-sm">
        Дата: <span class="badge-pill badge-primary">{{ date('Y.m.d', strtotime($date)) }}</span>
    </div>
    <div class="col-sm">
        Аудитория: <span class="badge-pill badge-secondary">{{ $schedule->audience }}</span>
    </div>
    <div class="col-sm">
    </div>
</div>
