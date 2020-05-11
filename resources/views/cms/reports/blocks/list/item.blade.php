<?php /** @var \App\Models\VisitLog $report */ ?>

<tr class="row">
    <td class="col-3">{{ $report->name }}</td>
    <td class="col-3">{{ $report->average_mark }}</td>
    <td class="col-3">{{ $report->count_absent }}</td>
    <td class="col-3">
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: {{ (100 * ($report->count - $report->count_absent)) / $report->count}}%"
                 aria-valuenow="{{ (100 * ($report->count - $report->count_absent)) / $report->count}}" aria-valuemin="0" aria-valuemax="100">
                {{ (100 * ($report->count - $report->count_absent)) / $report->count}}%
            </div>
        </div>
    </td>
</tr>
