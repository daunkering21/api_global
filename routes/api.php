<?php

use App\Http\Controllers\ApkController;
use App\Http\Controllers\DataBonusUrlController;
use App\Http\Controllers\DataPemberitahuanController;
use App\Http\Controllers\DataSettingsController;
use App\Http\Controllers\DepoWdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/global_api', function(){
    return 'berubahBosqu';
});
Route::get('/depowd',[DepoWdController::class, 'index']);
Route::post('/depowd',[DepoWdController::class, 'store']);
Route::get('/apk',[DepoWdController::class, 'apkApi']);

Route::prefix('apk')->group(function(){
    Route::get('/databonusurl', [DataBonusUrlController::class, 'index']);
    Route::post('/databonusurl', [DataBonusUrlController::class, 'store']);
    Route::put('/databonusurl/{id}', [DataBonusUrlController::class, 'update']);
    Route::delete('/databonusurl/{id}', [DataBonusUrlController::class, 'delete']);

    Route::get('/datapemberitahuan', [DataPemberitahuanController::class, 'index']);
    Route::post('/datapemberitahuan', [DataPemberitahuanController::class, 'store']);
    Route::put('/datapemberitahuan/{id}', [DataPemberitahuanController::class, 'update']);
    Route::delete('/datapemberitahuan/{id}', [DataPemberitahuanController::class, 'delete']);

    Route::get('/datasettings', [DataSettingsController::class, 'index']);
    Route::post('/datasettings', [DataSettingsController::class, 'store']);
    Route::put('/datasettings/{id}', [DataSettingsController::class, 'update']);
    Route::delete('/datasettings/{id}', [DataSettingsController::class, 'delete']);
}); 

Route::get('apkdata/{web?}',[ApkController::class,'dataWebsite']);