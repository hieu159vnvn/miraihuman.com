@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-vieclam'))
    @section('description', __('messages.layout-vieclam'))
    @section('content')
    
    @include('general.layout_ordersdetail')
    @include('general.home-scroll')
@endsection