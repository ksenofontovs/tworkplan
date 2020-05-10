{!! Form::open(['route' => 'cms.reports.make']) !!}
<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label('semester_id', __('cms.semesters.semester')) }}
        {{ Form::select('semester_id', $semesters, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('discipline_id', __('cms.disciplines.discipline')) }}
        {{ Form::select('discipline_id', $disciplines, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('group_id', __('cms.groups.group')) }}
        {{ Form::select('group_id', $groups, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('date_start', __('cms.semesters.date_start')) }}
        {{ Form::date('date_start', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('date_end', __('cms.semesters.date_end')) }}
        {{ Form::date('date_end', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
    </div>
</div>
{!! Form::submit(__('cms.create'), ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
