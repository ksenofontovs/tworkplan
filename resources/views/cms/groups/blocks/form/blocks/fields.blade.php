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
        {{ Form::label('specialization', __('cms.groups.specialization')) }}
        {{ Form::text('specialization', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-6">
        @php
            $levels = [
                \App\Models\Group::LEVEL_SPO => __('cms.groups.levels.' . \App\Models\Group::LEVEL_SPO),
                \App\Models\Group::LEVEL_VPO => __('cms.groups.levels.' . \App\Models\Group::LEVEL_VPO),
            ];
        @endphp
        {{ Form::label('level', __('cms.groups.level')) }}
        {{ Form::select('level', $levels, null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {{ Form::label('year', __('cms.groups.year')) }}
        {{ Form::text('year', null, ['class' => 'form-control']) }}
    </div>
</div>
