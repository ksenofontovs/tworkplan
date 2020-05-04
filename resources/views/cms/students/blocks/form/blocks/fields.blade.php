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
        {{ Form::label('name', __('cms.students.name')) }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>

    @if (request()->input('group_id'))
        {{ Form::text('group_id', request()->input('group_id'), ['class' => 'form-control', 'hidden']) }}
    @else
        <div class="form-group col-md-6">
            {{ Form::label('group_id', __('cms.students.group')) }}
            {{ Form::text('group_id', null, ['class' => 'form-control', 'disabled']) }}
        </div>
    @endif

</div>

<div class="form-row">
    <div class="form-group col-md-6">
        @php
            $subgroup = [
                \App\Models\Student::SUBGROUP_A => __('cms.students.subgroups.' . \App\Models\Student::SUBGROUP_A),
                \App\Models\Student::SUBGROUP_B => __('cms.students.subgroups.' . \App\Models\Student::SUBGROUP_B),
            ];
        @endphp
        {{ Form::label('subgroup', __('cms.students.subgroup')) }}
        {{ Form::select('subgroup', $subgroup, null, ['class' => 'form-control']) }}
    </div>
</div>
