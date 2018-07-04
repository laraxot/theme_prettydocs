@extends('pub_theme::layouts.app')
@section('content')
{{ Theme::add('theme/pub/plugins/prism/prism.css') }}
{{ Theme::add('theme/pub/plugins/prism/prism.js') }}
{{ Theme::add('theme/pub/plugins/jquery-scrollTo/jquery.scrollTo.min.js') }}
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash')
<div class="doc-wrapper">
	<div class="container">
		<div id="doc-header" class="doc-header text-center">
			<h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> {{ $row->title }}</h1>
			<div class="meta"><i class="fa fa-clock-o"></i> Last updated: {{ $row->updated_at }}</div>
		</div>
		<!--//doc-header-->
		<div class="doc-body">
			<div class="doc-content">
				<div class="content-inner">
					
					{{--
					{!! $row->txt !!}
					@include($view.'.sections.download')
					@include($view.'.sections.installation')
					@include($view.'.sections.code')
					@include($view.'.sections.callout')
					@include($view.'.sections.tables')
					@include($view.'.sections.buttons')
					@include($view.'.sections.video')
					--}}
				</div>
				<!--//content-inner-->
			</div>
			<!--//doc-content-->
			@include($view.'.sidebar')
			
		</div>
		<!--//doc-body-->              
	</div>
	<!--//container-->
</div>
<!--//doc-wrapper-->
{{--
@include($view.'.promo')
--}}
@endsection