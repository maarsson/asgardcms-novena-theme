@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
   {{-- {!! $page->body !!} --}}
    @include('sections.topimage')
    @include('pages.blog-posts')
@stop
