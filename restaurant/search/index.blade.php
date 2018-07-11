@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash')

{{ Theme::add('theme/bc/leaflet/dist/leaflet.css') }}
{{ Theme::add('theme/bc/leaflet/dist/leaflet.js') }}
{{ Theme::add('theme/bc/leaflet.markercluster/dist/leaflet.markercluster.js') }}
{{ Theme::add('theme/bc/leaflet.markercluster/dist/MarkerCluster.css') }}
{{ Theme::add('theme/bc/leaflet.markercluster/dist/MarkerCluster.Default.css') }}
{{ Theme::add('theme/bc/leaflet.fullscreen/dist/leaflet.fullscreen.css')}}
{{ Theme::add('theme/bc/leaflet.fullscreen/dist/Leaflet.fullscreen.min.js')}}

<div id="mapid" style="width: 800px; height: 600px;"></div>
<div id="msg2">MSG2</div>
@endsection
@push('scripts')
<script>

	//var mymap = L.map('mapid').setView([45.49, 11.33], 13);
	var mymap = L.map('mapid',{
    	fullscreenControl: {
        	pseudoFullscreen: false
    	}
    	//,scrollWheelZoom:false
  	}).fitWorld();

	var $access_token='pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token='+$access_token, {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	function loadMarkers(){
    	var ajax_url = $(location).attr('href');
    	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});
		var formData = {
			mapWestLng: 	mymap.getBounds().getWest(),
			mapEastLng: 	mymap.getBounds().getEast(),
			mapSouthLat: 	mymap.getBounds().getSouth(),
			mapNorthLat: 	mymap.getBounds().getNorth(),
			dataType:       'json'
		};
    	$.ajax({
			url: ajax_url,
			type: 'get',
			dataType: 'json',
			data: formData, //querystring,
			success: function(response) {
				showMarkers(response, mymap);
				//geojsonLayer = L.geoJson(response).addTo(map);
        		//map.fitBounds(geojsonLayer.getBounds());
			},
			error: function(response) {
				console.log(response);
			}
		});
    };

    function showMarkers(data, map) {
    	//var cities = L.layerGroup();
    	var markers = L.markerClusterGroup();
		for (var i = 0; i < data.length; i++) {
			var row = data[i];
			var customPopup = '<img class="wwone__map-infobox__thumb" src="##img_src##" /><div class="wwone__map-infobox__badge">##rating##</div><div class="wwone__map-infobox__inner"><div class="wwone__map-infobox__inner__location">##photo_id##</div><div class="wwone__map-infobox__inner__heading">##title##</div><div class="wwone__map-infobox__inner__info"><div class="wwone__map-infobox__inner__info__type"><strong>Cuisines:</strong>##type##</div><div class="wwone__map-infobox__inner__info__location"><strong>Working:</strong> ##open-close##</div><div class="wwone__map-infobox__inner__info__date"><strong>Delivery:</strong> ##delivery##</div></div><a class="wwone__map-infobox__inner__btn btn" href="##url##" target="_blank">View &raquo;</a></div>';
			for (var itm in row) {
				//console.log(itm);
				customPopup = customPopup.replace('##' + itm + '##', row[itm]);
			}
			var customOptions ={
        		'maxWidth': '500',
        		'className' : 'custom'
        	};
			//var myIcon=L.icon.glyph({ prefix: 'fa', glyph: 'globe' });
			var marker=L.marker([row.lat,row.lng],{title: row.title}/*,{icon: myIcon}*/).bindPopup(customPopup,customOptions);//.addTo(map);
			markers.addLayer(marker);
		}
		map.addLayer(markers);

	}

	//mymap.on('dragend',loadMarkers);
	mymap.on('moveend',loadMarkers);
	/*mygeojsonlayer.clearLayers();
    mygeojsonlayer = L.geoJson(my_geojson_data);
    mygeojsonlayer.addTo(map);
    */


	// load GeoJSON from an external file 
	//https://leanpub.com/leaflet-tips-and-tricks/read  !!!!!
	//http://labs.easyblog.it/maps/leaflet-geojson-selector/examples/reload-layer.html  sempre utile la mappa dell'italia interattiva
	//https://bl.ocks.org/tristen/1b0d608ca292e9f22cad mappa con contorni carini
	//https://maptimeboston.github.io/leaflet-intro/
	//https://raw.githubusercontent.com/calvinmetcalf/leaflet-ajax/master/dist/leaflet.ajax.min.js
	//https://github.com/calvinmetcalf/leaflet-ajax
	//lo fa https://github.com/stefanocudini/leaflet-layerJSON/tree/master/dist .. ma aggiungere troppi plugin
	//http://lyzidiamond.com/posts/external-geojson-and-leaflet-the-other-way
	//https://developers.google.com/maps/documentation/javascript/examples/layer-data-dragndrop  //geojson

  	//$.getJSON("rodents.geojson",function(data){
    	// add GeoJSON layer to the map once the file is loaded
    	//L.geoJson(data).addTo(map);
  	//});
 


	mymap.locate({setView: true, maxZoom: 16});
	
</script>
@endpush
