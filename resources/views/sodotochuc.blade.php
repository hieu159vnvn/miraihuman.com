@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-sodotochuc-1'))
    @section('description', __('messages.layout-sodotochuc-1'))
    @section('content')
    
    @include('general.layout_sodotochuc')
    @include('general.home-scroll')
@endsection