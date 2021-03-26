@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-dieuduong'))
    @section('description', __('messages.layout-dieuduong'))
    @section('content')
    
    @include('general.layout_dieuduong')
    @include('general.home-scroll')
@endsection