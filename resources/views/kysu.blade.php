@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-kysu'))
    @section('description', __('messages.layout-kysu'))
    @section('content')
    
    @include('general.layout_kysu')
    @include('general.home-scroll')
@endsection