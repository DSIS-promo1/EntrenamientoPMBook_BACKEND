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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


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
            'show'
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
    'preguntas',
    'PreguntaController', 
    ['only' => 
        [
            'index',
            'show'
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
