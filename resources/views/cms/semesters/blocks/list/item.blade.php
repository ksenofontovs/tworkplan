<?php /** @var \App\Models\semester $semester */ ?>

<tr>
    <th scope="row">{{ $semester->id }}</th>
    <td>{{ $semester->date_start }}</td>
    <td>{{ $semester->date_end }}</td>
    <td>
        <div class="row block">
        {{ link_to(route('cms.semesters.edit', ['semester' => $semester->id]), __('cms.edit'), ['class' => 'btn btn-sm btn-primary mr-2']) }}
        {!! Form::open(['route' => ['cms.semesters.destroy', 'semester' => $semester->id], 'method' => 'DELETE',
            'onsubmit' => 'return confirm("' . __('cms.delete_confirm') . '")']) !!}
        {!! Form::submit(__('cms.delete'), ['class' => 'btn btn-sm btn-outline-danger']) !!}
        {!! Form::close() !!}
        </div>
    </td>
</tr>
