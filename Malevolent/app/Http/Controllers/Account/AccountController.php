<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $language = config('malevolent.languages.'.$request->language);

        if (!$language) {
            return redirect()->back();
        }

        Auth::user()->update([
            'user_language' => $request->language
        ]);

        return redirect()->back();
    }

    public function deleteAccount(Request $request)
    {
        if (!$request->delete) {
            return redirect()->back();
        }

        Auth::user()->delete();
        return redirect('/');
    }
}
