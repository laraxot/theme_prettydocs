{{-- Route::current()->getName() //container.show --}} 
@if(strlen(Request::path())<4)
@include('pub_theme::layouts.partials.headernav_home')
@else
@include('pub_theme::layouts.partials.headernav_inside')
@endif
