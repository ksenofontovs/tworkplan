<?php /** @var \App\Models\Group $group */ ?>
<h1 class="display-4">{{ $group->specialization }}</h1>
<p class="lead">
    {{ $group->specialization }}
</p>
<p class="text-justify">@lang('cms.groups.levels.' . $group->level)</p>
<p class="text-justify">{{ $group->year }}</p>
