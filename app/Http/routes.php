<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use laravel\pagseguro\Platform\Laravel5\PagSeguro;


Route::get('/', function () {
return view('welcome');
});

Route::get('/como-funciona', ['as' => 'admin.como-funciona', 'uses' => 'FunctionsController@PageComoFunciona']);
Route::get('/contato', ['as' => 'admin.contato', 'uses' => 'FunctionsController@PageContato']);
Route::get('/sobre', ['as' => 'admin.sobre', 'uses' => 'FunctionsController@PageSobre']);
Route::get('/destaques', ['as' => 'admin.destaques', 'uses' => 'FunctionsController@PageDestaques']);
Route::get('/teatro/filtros', ['as' => 'admin.filtros', 'uses' => 'FunctionsController@PageFiltros']);
Route::get('/teatro/pecas', ['as' => 'admin.pecas', 'uses' => 'FunctionsController@PagePecas']);
Route::get('/teatro/peca', ['as' => 'admin.peca', 'uses' => 'FunctionsController@PagePeca']);
Route::get('/beneficio/categorias', ['as' => 'admin.peca', 'uses' => 'FunctionsController@PageCategorias']);
Route::get('/beneficios', ['as' => 'admin.peca', 'uses' => 'FunctionsController@PageBeneficios']);
Route::get('/busca', ['as' => 'admin.busca', 'uses' => 'FunctionsController@PageBusca']);
Route::post('form', ['as' => 'admin.form', 'uses' => 'FunctionsController@PostForm']);
Route::get('dadosForm', ['as' => 'admin.dadosform', 'uses' => 'FunctionsController@getDadosForm']);
Route::get('/get-peca/{slug}', ['as' => 'admin.get-peca', 'uses' => 'ValidaVoucherController@getpeca']);
//-------------------------------------------------------------------------------------------------------------------------
#   rotas de posts
Route::post('put-queimar-saldo-pecas/{id}/{slug}', ['as' => 'admin.put-queimar-saldo-pecas', 'uses' => 'ValidaVoucherController@putQueimarSaldoPecas']);
Route::post('put-queimar-saldo-beneficios/{id}/{slug}', ['as' => 'admin.put-queimar-saldo-beneficios', 'uses' => 'ValidaVoucherController@putQueimarSaldoBeneficios']);
Route::post('validavoucher/', ['as' => 'admin.validavoucher', 'uses' => 'ValidaVoucherController@putQueimarVoucher']);

//-------------------------------------------------------------------------------------------------------------------------

Route::get('getcodigos/{id}', ['as' => 'admin.getcodigos', 'uses' => 'ValidaVoucherController@getCodigos']);
Route::get('get-beneficio/{slug}', ['as' => 'admin.get-beneficio', 'uses' => 'ValidaVoucherController@getBeneficio']);

Route::get('get-saldo/{id}', ['as' => 'admin.get-queimar-voucher', 'uses' => 'ValidaVoucherController@getVerificarSaldo']);
Route::get('dispara-email/', ['as' => 'admin.dispara-email', 'uses' => 'ValidaVoucherController@getDisparoDeEmail']);
Route::get('/pagamento/pagseguro', function () {

    $codigo_item = "1560ED9218185F4554297FB1FF62CC44";

    return ($codigo_item);

});


Route::get('/pagseguro', function (Request $request) {

    $data = [
        'items' => [
            [
                'id' => '18',
                'description' => 'Item Um',
                'quantity' => '1',
                'amount' => '1.15',
                'weight' => '45',
                'shippingCost' => '3.5',
                'width' => '50',
                'height' => '45',
                'length' => '60',
            ],
            [
                'id' => '19',
                'description' => 'Item Dois',
                'quantity' => '1',
                'amount' => '3.15',
                'weight' => '50',
                'shippingCost' => '8.5',
                'width' => '40',
                'height' => '50',
                'length' => '80',
            ],
        ],
        'shipping' => [
            'address' => [
                'postalCode' => '06410030',
                'street' => 'Rua Leonardo Arruda',
                'number' => '12',
                'district' => 'Jardim dos Camargos',
                'city' => 'Barueri',
                'state' => 'SP',
                'country' => 'BRA',
            ],
            'type' => 2,
            'cost' => 30.4,
        ],
        'sender' => [
            'email' => 'sender@gmail.com',
            'name' => 'Isaque de Souza Barbosa',
            'documents' => [
                [
                    'number' => '01234567890',
                    'type' => 'CPF'
                ]
            ],
            'phone' => '11985445522',
            'bornDate' => '1988-03-21',
        ]
    ];
    Config::set('use-sandbox', true);
    $checkout = PagSeguro::checkout()->createFromArray($data);
    var_dump($checkout);
    $credentials = PagSeguro::credentials()->get();
    $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
    if ($information) {
        print_r($information->getCode());
        print_r($information->getDate());
        print_r($information->getLink());
    }
});


Route::get('users/{id}', [
    'as' => 'get-saldo', 'uses' => 'UserController@getSaldoUser'
]);
