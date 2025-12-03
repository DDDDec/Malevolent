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
        $server = $request->header('X-Server-Port');

        $language = $request->input('language');

        if (!$key || !$user || !$server || !$language) {
            return "[^5Request^7] This request failed, please contact the server administrator.";
        }

        return "";
    }
}
