<table class="table table-striped">
    @include('cms.schedules.blocks.mainlist.header')
    <tbody>
    @each('cms.schedules.blocks.mainlist.item', $schedules, 'schedule')
    </tbody>
</table>
