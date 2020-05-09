@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="form-group row">
                    {!! Form::open(['route' => 'home', 'method' => 'get', 'class' => 'form-inline', 'id' => 'home-form']) !!}
                    {!! Form::label('date', 'Расписание на', ['class' => 'px-2 col-form-label']) !!}
                    {!! Form::date('date', $date, ['class' => 'form-control', 'id' => 'home-date']) !!}
                    {!! Form::close() !!}

                @if ($semester)
                    <span class="form-inline px-5">Семестр c {{ date('Y.m.d', strtotime($semester->date_start)) }} по {{ date('Y.m.d', strtotime($semester->date_end)) }}
                    </span>
                @endif
                </div>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($schedules)
                    @include('cms.schedules.blocks.mainlist.index')
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
