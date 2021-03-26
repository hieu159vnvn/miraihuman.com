@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-hinhanh2'))
    @section('description', __('messages.layout-hinhanh2'))
    @section('content')
    
    @include('general.layout_hinhanhalbum')
    @include('general.home-scroll')
@endsection