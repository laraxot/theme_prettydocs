<ol class="breadcrumb">
	<li><a href="{{ url($lang) }}">Home</a></li>
	<li><a href="{{ $container->url }}">{{ $container->title }}</a></li>
	@if(isset($item)) 
	<li><a href="{{ $item->url }}">{{ $item->title }}</a></li>
	@endif
</ol>