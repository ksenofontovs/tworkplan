<table class="table table-striped">
    @include('cms.groups.blocks.list.header')
    <tbody>
    @each('cms.groups.blocks.list.item', $groups, 'group')
    </tbody>
</table>
{{ $groups->links() }}
