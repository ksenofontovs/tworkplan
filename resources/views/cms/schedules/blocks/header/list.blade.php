<div class="my-3">
    <a class="btn btn-primary" href="{{ route('cms.schedules.create') }}" role="button">
        @lang('cms.create')
    </a>
    <span class="mx-4 lead">@lang('cms.user') {{ Auth::user()->name }}</span>
</div>
