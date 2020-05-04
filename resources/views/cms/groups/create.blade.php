@extends('layouts.app')

@section('content')
    @php
        $breadcrumbs = [
            [
                'url' => route('home'),
                'title' => __('cms.cms'),
            ],
            [
                'url' => route('cms.groups.index'),
                'title' => __('cms.groups.groups'),
            ],
            [
                'url' => route('cms.groups.create'),
                'title' => __('cms.create'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.groups.blocks.form.create')

@endsection
