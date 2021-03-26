@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-gioithieu1'))
    @section('description', __('messages.layout-gioithieu1'))
    @section('content')
    
    @include('general.layout_gioithieu')
    @include('general.home-scroll')
@endsection