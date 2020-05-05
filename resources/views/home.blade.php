@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Сегодня @php echo date('Y.m.d'); @endphp
                @if ($semester)
                    Семестр c {{ $semester->date_start }} по {{ $semester->date_start }}
                @endif
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($schedules)
                    @include('cms.schedules.blocks.list.index')
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
