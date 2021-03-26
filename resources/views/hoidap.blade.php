@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-hoidap'))
    @section('description', __('messages.layout-hoidap'))
    @section('content')
    
    @include('general.layout_hoidap')
    @include('general.home-scroll')
@endsection