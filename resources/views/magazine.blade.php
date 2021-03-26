@include('layouts.language')
@extends('layouts.index')
    @section('title', __('messages.layout-magazine'))
    @section('description', __('messages.layout-magazine'))
    @section('content')
    
    @include('general.layout_magazine')
@endsection