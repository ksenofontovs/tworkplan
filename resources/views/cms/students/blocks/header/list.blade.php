@if ($group_id)
<div class="my-3">
    <a class="btn btn-primary" href="{{ route('cms.students.create', ['group_id' => $group_id]) }}" role="button">
        @lang('cms.create')
    </a>
</div>
@endif
