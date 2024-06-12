<?php

namespace App\Http\Controllers\api\zoho;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrganizationController extends Controller
{
    //
    public function getOrganizationData()
    {
        $access = $this->getAccessToken();
        $response = Http::withHeaders([
            'Authorization' => 'Zoho-oauthtoken ' . $access,
        ])->get('https://mail.zoho.com/api/organization');
        $data = 'acbbc';
        return $response;
    }
    private function getAccessToken()
    {
        $clientId = getenv('CLIENT_ID');
        $clientIdSecret = getenv('CLIENT_SECRET');
        $refreshToken = getenv('REFRESH_TOKEN');
        $grantType = getenv('GRANT_TYPE');
        $response =  Http::post('https://accounts.zoho.com/oauth/v2/token?refresh_token=' . $refreshToken . '&client_id=' . $clientId . '&client_secret=' . $clientIdSecret . '&grant_type=' . $grantType);
        $respone = json_decode($response)->access_token;
        return $respone;
    }
}
