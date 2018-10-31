<ol class="breadcrumb">
	<li><a href="{{ url($lang) }}">Home</a></li>
	<li><a href="{{ $container->url }}">{{ $container->title }}</a></li>
	@if(isset($item0)) 
	<li><a href="{{ $item0->url }}">{{ $item0->title }}</a></li>
	@endif
</ol>