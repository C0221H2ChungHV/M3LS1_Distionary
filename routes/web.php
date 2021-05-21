<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dictionary', function () {
    return view('Search');
});
Route::post('/dictionary', function (Illuminate\Http\Request $request) {
$input = $request->input;
$arr = ["apple"=>"qua tao", "orange"=>"qua cam", "banana"=>"qua chuoi"];
$count = 0;
foreach ($arr as $key=>$value){
    if ($key == $input)
    {
        $result = $value;
        $count = 1;
    }
}
if ($count == 0) {
    $result = "Khong co trong tu dien";
}
return view('result', compact(['input', 'result']));
});

