<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['jwt.auth']], function() {

    Route::get('logout', 'AuthController@logout');


    Route::resource(
    	'fuentes',
    	'FuenteController',
    	['only' => 
    		[
        		'index',
        		'show',
        		'store',
        		'update',
        		'destroy'
        	]
        ]
    );

    Route::resource(
    	'evaluaciones',
    	'EvaluacionController',
    	['only' => 
    		[
        		'index',
        		'show',
        		'store',
        		'update',
        		'destroy'
        	]
        ]
    );

    Route::resource(
    	'alternativas',
    	'AlternativaController', 
    	['only' => 
    		[
        		'index',
        		'show'
        	]
        ]
     );


    Route::resource('capitulos','CapituloController');


    Route::resource('capitulos.secciones','CapituloSeccionController'); 
     
    Route::resource( 
        'secciones', 
        'SeccionController', 
        ['only' => 
            [ 
                'index', 
                'show' 
     
            ] 
        ] 
    );


    Route::resource(
        'preguntas',
        'PreguntaController',
        ['only' => 
            [
                'index',
                'show',
                'store',
                'update',
                'destroy'
            ]
        ]
    );


    Route::resource(
        'preguntas.alternativas',
        'PreguntaAlternativaController', 
        ['only' => 
            [
                'index',
                'show',
                'store',
                'update',
                'destroy'
            ]
        ]
    );


    Route::resource(
        'preguntas.alternativas',
        'PreguntaAlternativaController', 
        ['only' => 
            [
                'index',
                'show'
            ]
        ]
    );


    Route::resource(
        'usuarios',
        'UsuarioController', 
        ['only' => 
            [
                'index',
                'show',
                'store',
                'update',
                'destroy'
            ]
        ]
    );

});


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@authenticate');
Route::post('recover', 'AuthController@recover');
