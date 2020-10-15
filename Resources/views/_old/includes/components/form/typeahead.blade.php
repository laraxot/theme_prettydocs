<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
	{{ Form::label($name,   trans($lang.'.'.$name), ['class' => 'sr-only control-label']) }}
	<div class="form-group search_container">
		{{ Form::text($name, $value, array_merge([
                    'class' => 'form-control form-control-lg typeahead search-input'
                    ,'placeholder'=> trans($lang.'.'.$name)
                    ], $attributes)) }}
	</div>
    @if ( $errors->has($name) )
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>

{{ Theme::add('theme/bc/typeahead.js/dist/typeahead.bundle.js') }}
{{ Theme::add('backend::js/bsTypeahead.js') }}
 
