<table class="table table-striped">
    @include('cms.reports.blocks.list.header')
    <tbody>
    @each('cms.reports.blocks.list.item', $reports, 'report')
    </tbody>
</table>
