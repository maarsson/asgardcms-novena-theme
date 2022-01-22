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
    @include('sections.banner')
    @include('sections.features')
    @include('sections.about')
    @include('sections.cta')
    @include('sections.service')
    @include('sections.appointment')
    @include('sections.testimonials')
    @include('sections.clients')
@stop
