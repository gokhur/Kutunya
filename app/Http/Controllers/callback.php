<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class callback extends Controller
{
    public function callback(){
        [$access_token, $refresh_token] = $client->requestAccessToken(
            $redirect_uri,
            $code,
            $verifier
        );
return $access_token;
    }
}
