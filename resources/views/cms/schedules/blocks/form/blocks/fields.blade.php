@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <span><p>{{ $error }}</p></span>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('user_id', __('cms.user')) }}
        {{ Form::text('user', Auth::user()->name, ['class' => 'form-control', 'disabled']) }}
        {{ Form::text('user_id', Auth::user()->id, ['class' => 'form-control', 'hidden']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('group_id', __('cms.groups.group')) }}
        {{ Form::select('group_id', $groups, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        @php
            $subgroup = [
                0 => '-',
                \App\Models\Student::SUBGROUP_A => __('cms.students.subgroups.' . \App\Models\Student::SUBGROUP_A),
                \App\Models\Student::SUBGROUP_B => __('cms.students.subgroups.' . \App\Models\Student::SUBGROUP_B),
            ];
        @endphp
        {{ Form::label('subgroup', __('cms.students.subgroup')) }}
        {{ Form::select('subgroup', $subgroup, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('discipline_id', __('cms.disciplines.discipline')) }}
        {{ Form::select('discipline_id', $disciplines, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('lesson_type_id', __('cms.lesson_type')) }}
        {{ Form::select('lesson_type_id', $lessonType, null, ['class' => 'form-control']) }}
    </div>
    @php
        $evenOdd = [
            0 => __('cms.all'),
            \App\Models\Schedule::LESSON_EVEN => __('cms.even_odds.' . \App\Models\Schedule::LESSON_EVEN),
            \App\Models\Schedule::LESSON_ODD => __('cms.even_odds.' . \App\Models\Schedule::LESSON_ODD),
        ];
    @endphp
    <div class="form-group col-md-6">
        {{ Form::label('even_odd', __('cms.even_odd')) }}
        {{ Form::select('even_odd', $evenOdd, null, ['class' => 'form-control']) }}
    </div>
    @php
        $halfLesson = [
            0 => __('cms.all'),
            \App\Models\Schedule::LESSON_HALF_FIRST => __('cms.half_lessons.' . \App\Models\Schedule::LESSON_HALF_FIRST),
            \App\Models\Schedule::LESSON_HALF_SECOND => __('cms.half_lessons.' . \App\Models\Schedule::LESSON_HALF_SECOND),
        ];
    @endphp
    <div class="form-group col-md-6">
        {{ Form::label('half_lesson', __('cms.half_lesson')) }}
        {{ Form::select('half_lesson', $halfLesson, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('semester_id', __('cms.semesters.semester')) }}
        {{ Form::select('semester_id', $semesters, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('lesson_day_id', __('cms.lesson_day')) }}
        {{ Form::select('lesson_day_id', $lessonDays, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('lesson_time_id', __('cms.lesson_time')) }}
        {{ Form::select('lesson_time_id', $lessonTimes, null, ['class' => 'form-control']) }}
    </div>
    @php
        $typeLoad = [
            \App\Models\Schedule::TYPE_LOAD_BASIC => __('cms.type_loads.' . \App\Models\Schedule::TYPE_LOAD_BASIC),
            \App\Models\Schedule::TYPE_LOAD_HOUR => __('cms.type_loads.' . \App\Models\Schedule::TYPE_LOAD_HOUR),
        ];
    @endphp
    <div class="form-group col-md-6">
        {{ Form::label('type_load', __('cms.type_load')) }}
        {{ Form::select('type_load', $typeLoad, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('audience', __('cms.audience')) }}
        {{ Form::text('audience', null, ['class' => 'form-control']) }}
    </div>
</div>
