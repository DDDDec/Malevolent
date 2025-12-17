<?php

namespace App\Http\Controllers\Plutonium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LanguageController extends Controller
{
    /**
     * Handle incoming language request from the game server.
     */
    public function handle(Request $request)
    {
        $key = $request->header('X-Api-Key');
        $port = $request->header('X-Server-Port');

        if (!$key || !$port) {
            return "[^5Request^7] This request failed, please contact the server administrator.";
        }

        if ($request->input('language_type') == 'EventAutoMessage') {
            $message = config('malevolent.languages.' . $request->input('language') . '.' . $request->input('language_type'));
            $messageCount = count($message) - 1;
            return $message[random_int(0, $messageCount)];
        }

        $message = config('malevolent.languages.' . $request->input('language') . '.' . $request->input('language_type') . '.' . $request->input('language_id'));

        if (!$message) {
            return "[^5Request^7] Translation not found.";
        }

        foreach ($request->all() as $key => $value) {
            $message = str_replace(":{$key}", $value, $message);
        }

        return $message;
    }
}
