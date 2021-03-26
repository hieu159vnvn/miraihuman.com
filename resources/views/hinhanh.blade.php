@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-hinhanh1'))
    @section('description', __('messages.layout-hinhanh1'))
    @section('content')
    
    @include('general.layout_hinhanh')
    @include('general.home-scroll')
@endsection