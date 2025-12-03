<?php

namespace App\Http\Controllers\Plutonium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Handle incoming language request from the game server.
     */
    public function handle(Request $request)
    {
        $key = $request->header('X-Api-Key');
        $user = $request->header('X-User-Id');
        $port = $request->header('X-Server-Port');

        if (!$key || !$user || !$port) {
            return "[^5Request^7] This request failed, please contact the server administrator.";
        }

        $message = config('malevolent.language.'.$request->input('language'));
        return $message[$request->input('language_id')];
    }
}
