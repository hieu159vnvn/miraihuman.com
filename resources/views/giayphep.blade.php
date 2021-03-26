@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-giayphep'))
    @section('description', __('messages.layout-giayphep'))
    @section('content')
    
    @include('general.layout_giayphep')
    @include('general.home-scroll')
@endsection