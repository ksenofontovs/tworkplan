<?php /** @var \App\Models\VisitLog $report */ ?>

<tr class="row">
    <td class="col-3">{{ $report->name }}</td>
    <td class="col-3">{{ $report->average_mark }}</td>
    <td class="col-3">{{ $report->count_absent }}</td>
    <td class="col-3">
        <div class="progress">
            @php
                $percent = (100 * ($report->count_hours - $report->count_absent)) / $report->count_hours;
                if ($percent >= 90) {
                    $color = 'bg-success';
                } elseif ($percent >= 60) {
                    $color = 'bg-primary';
                } else {
                    $color = 'bg-danger';
                }
            @endphp
            <div class="progress-bar {{ $color }}" role="progressbar" style="width: {{ $percent }}%"
                 aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100">
                {{ $percent }}%
            </div>
        </div>
    </td>
</tr>
