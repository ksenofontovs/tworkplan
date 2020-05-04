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
            [
                'url' => route('cms.semesters.create'),
                'title' => __('cms.create'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.semesters.blocks.form.create')

@endsection
