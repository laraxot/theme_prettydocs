<section id="{{ $row->guid }}" class="doc-section">
	<h2 class="section-title">{{ $row->title }}</h2>
	<div class="section-block">
		<p>{{ $row->subtitle }}</p> 
	</div>
	<div class="section-block">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-sm-12">
				{{--  <p>{{ $row->image_src }}</p>  --}}
				<div class="screenshot-holder">
					<a href="{{ $row->image_src }}" data-title="Dashboard - Project Management" data-toggle="lightbox">
						<img class="img-responsive" src="{{ $row->image_src }}" alt="screenshot" />
					</a>
					<a class="mask" href="{{ $row->image_src }}" data-title="Dashboard - Project Management" data-toggle="lightbox">
						<i class="icon fa fa-search-plus"></i>
					</a>
				</div> 
			</div>
			<div class="col-md-6 col-sm-12 col-sm-12">
				{!! $row->txt !!}
			</div>				
		</div>
	</div>
</section>
