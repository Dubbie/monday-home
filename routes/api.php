<?php

use App\Http\Controllers\Api\NoticeController;
use Illuminate\Support\Facades\Route;

Route::post('/notice/read', [NoticeController::class, 'read'])->name('api.notice.read');
