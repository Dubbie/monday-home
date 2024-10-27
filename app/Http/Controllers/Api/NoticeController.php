<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class NoticeController extends Controller
{
    public function read()
    {
        return response()->json([
            'message' => 'Elolvasva'
        ])->withCookie(Cookie::make('notice_read', true, 60 * 24 * 30));
    }
}
