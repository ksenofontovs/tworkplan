<?php /** @var \App\Models\semester $semester */ ?>

<tr>
    <th scope="row">{{ $semester->id }}</th>
    <td>{{ $semester->date_start }}</td>
    <td>{{ $semester->date_end }}</td>
    <td>
        {{ link_to(route('cms.semesters.edit', ['semester' => $semester->id]), __('cms.edit')) }}
    </td>
</tr>
