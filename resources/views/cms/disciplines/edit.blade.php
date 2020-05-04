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
                'url' => '',
                'title' => __('cms.edit'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.disciplines.blocks.header.edit')
    @include('cms.disciplines.blocks.form.edit')
@endsection
