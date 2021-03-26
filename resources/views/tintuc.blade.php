@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-tintuc1'))
    @section('description', __('messages.layout-tintuc1'))
    @section('content')
    
    @include('general.layout_tintuc')
    @include('general.home-scroll')
@endsection