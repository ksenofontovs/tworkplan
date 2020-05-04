<table class="table table-striped">
    @include('cms.students.blocks.list.header')
    <tbody>
    @each('cms.students.blocks.list.item', $students, 'student')
    </tbody>
</table>
{{ $students->appends(request()->input())->links() }}
