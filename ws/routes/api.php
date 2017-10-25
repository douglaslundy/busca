<?php

$this->group(['prefix' => 'v1'], function() {

    $this->post('auth', 'Auth\AuthApiController@authenticate');

    $this->group(['middleware' => 'jwt.auth'], function() {
        $this->get('produtos/search', 'Api\v1\ProdutoController@search');
        $this->resource('produtos', 'Api\v1\ProdutoController');
    });
});
