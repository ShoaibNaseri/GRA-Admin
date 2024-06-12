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
        $clientId = '1000.YVB21Z34YWEEW84IBXBJAS6MG46V1Z';
        $clientIdSecret = '7b4a50953ecb74f8ab3f976852088fd00a7faea42e';
        $refreshToken = '1000.4d5735e72ea22d525e970a3604fe6ffd.47d8161c30106f7fe69c976b937c91af';
        $grant_type = 'refresh_token';

        $response =  Http::post('https://accounts.zoho.com/oauth/v2/token?refresh_token=' . $refreshToken . '&client_id=' . $clientId . '&client_secret=' . $clientIdSecret . '&grant_type=' . $grant_type);
        $respone = json_decode($response)->access_token;
        return $respone;
    }
}
