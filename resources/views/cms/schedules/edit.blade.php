@extends('layouts.app')

@section('content')
    @php
        $breadcrumbs = [
            [
                'url' => route('home'),
                'title' => __('cms.cms'),
            ],
            [
                'url' => route('cms.schedules.index'),
                'title' => __('cms.schedules.schedules'),
            ],
            [
                'url' => '',
                'title' => __('cms.edit'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.schedules.blocks.header.edit')
    @include('cms.schedules.blocks.form.edit')
@endsection
