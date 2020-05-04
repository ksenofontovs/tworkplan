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
                'url' => '',
                'title' => __('cms.edit'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.semesters.blocks.header.edit')
    @include('cms.semesters.blocks.form.edit')
@endsection
