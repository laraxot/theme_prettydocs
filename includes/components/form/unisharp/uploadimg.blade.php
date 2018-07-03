<div class="input-group">
	<span class="input-group-btn">
		<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
			<i class="fa fa-picture-o"></i> Choose
		</a>
	</span>
<input id="thumbnail" class="form-control" type="text" name="filepath">
</div>
<img id="holder" style="margin-top:15px;max-height:100px;">
{{ Theme::add('/vendor/laravel-filemanager/js/lfm.js') }}
{{ Theme::add('/vendor/laravel-filemanager/css/lfm.css') }}
{{ Theme::add('pub_theme::includes/components/form/unisharp/js/uploadimg.js') }}
