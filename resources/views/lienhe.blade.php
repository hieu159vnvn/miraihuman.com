@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-lienhe1'))
    @section('description', __('messages.layout-lienhe1'))
    @section('content')
    
    @include('general.layout_lienhe')
    @include('general.home-scroll')
@endsection