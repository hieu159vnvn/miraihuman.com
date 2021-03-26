@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-thuctapsinh'))
    @section('description', __('messages.layout-thuctapsinh'))
    @section('content')
    
    @include('general.layout_thuctapsinh')
    @include('general.home-scroll')
@endsection