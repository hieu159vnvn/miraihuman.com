@php
	if (Session::has('locale')) {
		$locale = Session::get('locale');
	}else {
		$locale = App::getLocale();
	}
	Session::put('locale', $locale);
	App::setLocale($locale);
@endphp
@include('layouts.header')
@include('layouts.main')
