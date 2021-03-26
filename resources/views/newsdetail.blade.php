@include('layouts.language')
@extends('layouts.index')
    @section('title', "$newsdetail->ten")
    @section('description', "$newsdetail->ten")
    @section('content')
    
    @include('general.layout_newsdetail')
    @include('general.home-scroll')
@endsection