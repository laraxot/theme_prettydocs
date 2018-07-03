@php
    $params=\Route::current()->parameters();
    extract($params);
    if(isset($container)){
        if(is_object($container)){$container_type=$container->type;}else{$container_type=$container;}
        $lang='pub_theme::'.$container_type;
        if(isset($container1)){
            if(is_object($container1)){$container1_type=$container1->type;}else{$container1_type=$container1;}
            $lang='pub_theme::'.$container_type.'.'.$container1_type;
        }
    }else{
        //dd($params);
	   $tmp= Route::currentRouteAction();
	   $tmp=explode('\\',$tmp);
	   $tmp=strtolower($tmp[1]);
	   $lang=$tmp.'::fields';
    }
@endphp

{{-- PUB_THEME COMPONENTS --}}
{{ Form::component('bsText', 'pub_theme::includes.components.form.text',
    ['name', 'value' => null,'attributes' => [],'lang'=>$lang]) }}    

{{ Form::component('bsPassword', 'pub_theme::includes.components.form.password',
    ['name', 'value' => null,'attributes' => [],'lang'=>$lang]) }}    


{{ Form::component('bsTextarea', 'pub_theme::includes.components.form.textarea',
    ['name', 'value' => null,'attributes' => [],'lang'=>$lang]) }}    

{{ Form::component('bsAddress', 'pub_theme::includes.components.form.address',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsGeoComplete', 'pub_theme::includes.components.form.geocomplete',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsGeoCompleteFull', 'pub_theme::includes.components.form.geocompletefull',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsTypeahead', 'pub_theme::includes.components.form.typeahead',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsUploadImg', 'pub_theme::includes.components.form.unisharp.uploadimg',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsCheckbox', 'pub_theme::includes.components.form.checkbox',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}



{{-- ADM_THEME COMPONENTS --}}

{{ Form::component('bsNumber', 'backend::includes.components.form.number',
	['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}	

{{ Form::component('bsSwitch', 'backend::includes.components.form.switch',
	['name', 'value' => null,'checked'=>false, 'attributes' => [],'lang'=>$lang]) }}

{{ Form::component('bsSubmit', 'backend::includes.components.form.submit',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}
{{ Form::component('bs3Submit', 'backend::includes.components.form.submit3',
    ['name', 'value' => null, 'attributes' => [],'lang'=>$lang]) }}	


@php

Form::macro('bsOpen', function ($model, $from, $to='', $params = null) {
    if ($params == null) {
        $params=\Route::current()->parameters();
    }
    $req_params=\Request::all();

    //if(is_array($req_params)) $params=array_merge($req_params,$params);

    //dd($params);

    if ($to=='') {
        $to=$from;
        switch ($to) {
            case 'update': $from='edit'; break;
            case 'store': $from='create'; break;
        }
    }
    
    $routename=Request::route()->getName();
    $routename=str_replace('.'.$from, '.'.$to, $routename);

    $route=route($routename, $params);

    $parz=array_merge([$routename], array_values($params));
    switch ($to) {
        case 'store':
            $method='POST';
        break;
        case 'update':
            $method='PUT'; //PUT/PATCH
        break;
        case 'destroy':
            $method='DELETE';
        break;
        default:
            $method='POST';
        break;
    }
    if (isset($params['method'])) {
        $method=$params['method'];
    }



    return Form::model($model, [
    'route' => $parz
    //'action' => $route
    ])
    //.csrf_field()
    .method_field($method);
});

Form::macro('bsBtnCrud', function ($extra) {
    $btns='';
    $btns.=Form::bsBtnEdit($extra);
    $btns.=Form::bsBtnDelete($extra);
    return $btns;
});
Form::macro('bsBtnEdit', function ($extra, $from='index', $to='edit') {
    $params=\Route::current()->parameters();
    $params=array_merge($params, $extra);
    $routename=Request::route()->getName();
    //echo '<h3>'.$routename.'</h3>';
    $route=route(str_replace('.'.$from, '.'.$to, $routename), $params);
    $class='btn btn-small btn-info';
    if (isset($extra['class'])) {
        $class.=' '.$extra['class'];
    }
    return '<a class="'.$class.'" href="'.$route.'" data-toggle="tooltip" title="Modifica"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a>';
});


Form::macro('bsBtnClone', function ($extra, $from='index', $to='edit' /*$to='replicate' */) {
    $params=\Route::current()->parameters();
    $params=array_merge($params, $extra);
    $params['replicate']=1;
    $route=route(str_replace('.'.$from, '.'.$to, Request::route()->getName()), $params);
    return '<a class="btn btn-small btn-warning" href="'.$route.'"  data-toggle="tooltip" title="Duplica"><i class="fa fa-clipboard fa-fw" aria-hidden="true"></i></a>';
});

Form::macro('bsBtnDelete', function ($extra) {
    $theme=\App\Services\ThemeService::class;
    //-----------
    $id=array_values($extra)[0];
    $params=\Route::current()->parameters();
    $params=array_merge($params, $extra);
    $route=route(str_replace('.index', '.destroy', Request::route()->getName()), $params);

    Theme::addStyle('/theme/bc/sweetalert/dist/sweetalert.css');
    Theme::addScript('/theme/bc/jquery/dist/jquery.min.js');
    Theme::addScript('/theme/bc/sweetalert/dist/sweetalert.min.js');
    Theme::addScript('/theme/js/btnDeleteX.js');
    $class='btn btn-small btn-danger';
    if (isset($extra['class'])) {
        $class.=' '.$extra['class'];
    }
    return '<a class="'.$class.'" href="#" data-token="'. csrf_token() .'" data-id="'.$id.'" data-href="'.$route.'" data-toggle="tooltip" title="Cancella"><i class="fa fa-trash-o fa-fw" aria-hidden="true"></i></a>';
});

Form::macro('bsBtnCreate', function ($extra=[]) {
     //---default var ---
     $txt='Nuova ';
     $params=[];
     extract($extra);
     $routename=str_replace('.index', '.create', Request::route()->getName());

     $params=array_merge(\Route::current()->parameters(), $params);
     $route=route($routename, $params);
     $class='btn btn-small btn-info btn-xs';
     if (isset($extra['class'])) {
         $class.=' '.$extra['class'];
     }
     return '<a class="'.$class.'" href="'.$route.'" data-toggle="tooltip" title="Create"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>&nbsp;'.$txt.'</a>';
 });

@endphp