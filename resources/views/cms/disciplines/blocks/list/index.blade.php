<table class="table table-striped">
    @include('cms.disciplines.blocks.list.header')
    <tbody>
    @each('cms.disciplines.blocks.list.item', $disciplines, 'discipline')
    </tbody>
</table>
{{ $disciplines->appends(request()->input())->links() }}
