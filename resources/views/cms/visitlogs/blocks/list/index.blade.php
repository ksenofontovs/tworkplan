{!! Form::open(['route' => ['cms.visitlogs.update', 'schedule' => $schedule->id],
            'onsubmit' => 'return confirm("' . __('cms.save_confirm') . '")']) !!}
{!! Form::hidden('date', $date) !!}
<table class="table table-striped">
    @include('cms.visitlogs.blocks.list.header')
    <tbody>
        @each('cms.visitlogs.blocks.list.item', $visitLogs, 'visitLog')
    </tbody>
</table>
{!! Form::submit(__('cms.save'), ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
