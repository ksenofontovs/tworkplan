<table class="table table-striped">
    @include('cms.schedules.blocks.list.header')
    <tbody>
    @each('cms.schedules.blocks.list.item', $schedules, 'schedule')
    </tbody>
</table>
@if ($schedules instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
    {{ $schedules->appends(request()->input())->links() }}
@endif
