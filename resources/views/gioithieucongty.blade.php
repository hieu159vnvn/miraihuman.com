@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-gioithieucongty-1'))
    @section('description', __('messages.layout-gioithieucongty-1'))
    @section('content')
    
    @include('general.layout_gioithieucongty')
    @include('general.home-scroll')
@endsection