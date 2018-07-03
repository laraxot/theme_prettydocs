<script>
    var base_url='{{ asset('/') }}';
    var lang='{{ \App::getLocale() }}';
    {{--  var google_maps_api='{{ config('xra.google.maps.api') }}'; --}}
@if(isset($params['address']))
    var address ="{{ $params['address'] }}";
@endif
</script>
@php
	Theme::add('/theme/bc/jquery/dist/jquery.min.js',1);
	//Theme::add('/theme/pub/js/tether.min.js');
	Theme::add('/theme/bc/bootstrap/dist/js/bootstrap.min.js');
	
	Theme::add('/theme/bc/matchHeight/dist/jquery.matchHeight-min.js');
	Theme::add('/theme/pub/js/main.js');
	Theme::add('/theme/pub/js/xot.js');
@endphp
{!! Theme::showScripts(false) !!}
@stack('scripts')