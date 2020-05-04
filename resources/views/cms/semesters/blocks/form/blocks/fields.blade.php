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
        {{ Form::label('date_start', __('cms.semesters.date_start')) }}
        {{ Form::date('date_start', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    {{ Form::label('date_end', __('cms.semesters.date_end')) }}
    {{ Form::date('date_end', \Carbon\Carbon::now()->addMonth(4), ['class' => 'form-control']) }}
</div>
</div>
