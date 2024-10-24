<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function read(Request $request)
    {
        $request->session()->put('notice_read', true);

        return response()->json([
            'message' => 'Elolvasva'
        ]);
    }
}
