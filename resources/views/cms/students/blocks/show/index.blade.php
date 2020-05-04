<?php /** @var \App\Models\Student $student */ ?>
<h1 class="display-4">{{ $student->name }}</h1>
<p class="lead">
    {{ $student->group_id }}
</p>
<p class="text-justify">{{ $student->subgroup }}</p>
