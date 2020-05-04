@extends('layouts.app')

@section('content')
    @php
        $breadcrumbs = [
            [
                'url' => route('home'),
                'title' => __('cms.cms'),
            ],
            [
                'url' => route('cms.disciplines.index'),
                'title' => __('cms.disciplines.disciplines'),
            ],
            [
                'url' => route('cms.disciplines.create'),
                'title' => __('cms.create'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.disciplines.blocks.form.create')

@endsection
