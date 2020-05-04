@extends('layouts.app')

@section('content')
    @php
        $breadcrumbs = [
            [
                'url' => route('home'),
                'title' => __('cms.cms'),
            ],
            [
                'url' => route('cms.semesters.index'),
                'title' => __('cms.semesters.semesters'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.semesters.blocks.header.list')
    @include('cms.semesters.blocks.list.index')
@endsection
