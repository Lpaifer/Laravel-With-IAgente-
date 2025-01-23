<?php

use App\Http\Controllers\EnviarSMSController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EnviarSMSController::class, 'enviarSms'])->name('enviar-sms.index');

