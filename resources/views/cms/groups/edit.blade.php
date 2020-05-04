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
                'url' => '',
                'title' => __('cms.edit'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.groups.blocks.header.edit')
    @include('cms.groups.blocks.form.edit')
@endsection
