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
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.schedules.blocks.header.list')
    @include('cms.schedules.blocks.list.index')
@endsection
