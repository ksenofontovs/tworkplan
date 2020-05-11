<div class="col-sm py-2">
    @if (isset($reports[0]))
        <span class="badge-primary badge-pill">{{ $reports[0]->count }}</span>
        {{ trans_choice('cms.lesson', $reports[0]->count) }}
        {{ __('cms.reports.period_and_dates', ['date_start' => date('Y.m.d', strtotime($dateStart)), 'date_end' => date('Y.m.d', strtotime($dateEnd))]) }}
    @endif
</div>
<table class="table table-hover">
    @include('cms.reports.blocks.list.header')
    <tbody>
    @each('cms.reports.blocks.list.item', $reports, 'report')
    </tbody>
</table>
