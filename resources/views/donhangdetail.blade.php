@include('layouts.language')
@extends('layouts.index')
    @section('title', "[ $donhangdetail->tendonhang ] $donhangdetail->nganhnghe_vn" )
    @section('description', "[ $donhangdetail->tendonhang ] $donhangdetail->nganhnghe_vn")
    @section('content')
    
    @include('general.layout_donhangdetail')
    @include('general.home-scroll')
@endsection