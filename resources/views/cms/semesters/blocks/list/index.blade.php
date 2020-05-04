<table class="table table-striped">
    @include('cms.semesters.blocks.list.header')
    <tbody>
    @each('cms.semesters.blocks.list.item', $semesters, 'semester')
    </tbody>
</table>
{{ $semesters->appends(request()->input())->links() }}
