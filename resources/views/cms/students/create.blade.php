@extends('layouts.app')

@section('content')
    @php
        $breadcrumbs = [
            [
                'url' => route('home'),
                'title' => __('cms.cms'),
            ],
            [
                'url' => route('cms.students.index'),
                'title' => __('cms.students.students'),
            ],
            [
                'url' => route('cms.students.create'),
                'title' => __('cms.create'),
            ],
        ];
    @endphp
    @include('cms.blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
    @include('cms.students.blocks.form.create')

@endsection
