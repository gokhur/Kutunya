<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Guzzle;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use \Etsy;
//use Etsy\OAuth\Client;

class connectstore extends Controller
{



    public function show() {
        $scopes = \Etsy\Utils\PermissionScopes::ALL_SCOPES;
        $redirect_uri = 'https://localhost:8000/callback';
        $client = new Etsy\OAuth\Client('f5exq0i3rhzbpfxhng8m78qk');
        [$verifier, $code_challenge] = $client->generateChallengeCode();
        $nonce = $client->createNonce();
        $url = $client->getAuthorizationUrl(
            $redirect_uri,
            $scopes,
            $code_challenge,
            $nonce,
        );
return $url;
    }






}
