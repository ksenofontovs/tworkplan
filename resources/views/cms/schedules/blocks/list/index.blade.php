<table class="table table-striped">
    @include('cms.schedules.blocks.list.header')
    <tbody>
    @each('cms.schedules.blocks.list.item', $schedules, 'schedule')
    </tbody>
</table>
{{ $schedules->appends(request()->input())->links() }}
