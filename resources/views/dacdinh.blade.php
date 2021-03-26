@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-dacdinh'))
    @section('description', __('messages.layout-dacdinh'))
    @section('content')
    
    @include('general.layout_dacdinh')
    @include('general.home-scroll')
@endsection