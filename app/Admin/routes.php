<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
    if (Gate::denies('view-admin')){
        return redirect('/')->with('message','Доступ в аднинку доступен только администратору сайта!');
    }
	return AdminSection::view( 'Админ панель');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);
