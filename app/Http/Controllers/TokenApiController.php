<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TokenApiController extends Controller
{
    private $url;
    private $sesiones;
    private $token;

    public function __construct()
    {
        $this->url = "https://legislativoedomex.com/api/";
        $this->sesiones = new Client();
        if (!Cache::has('access_token')) {
            $response = $this->sesiones->post('https://legislativoedomex.com/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '98f65a78-3a3e-46e5-a771-01f9d75bc1b2',
                    'client_secret' => 'fzYrxtrtHutHOovy8aKtTgBykor1npeS35zeqASh',
                    'username' => 'spid@administrador.gob.mx',
                    'password' => 'password',
                    'scope' => 'read',
                ],
            ]);
            $array = json_decode((string)$response->getBody(), true);
            Cache::put('access_token', $array["access_token"], $array["expires_in"]);
            $this->token = $array["access_token"];
        } else {
            $this->token = Cache::get("access_token");
        }
    }

    public function getCredencials()
    {
        return ["url" => $this->url, "sesiones" => $this->sesiones, "token" => $this->token];
    }

    public function getPeticion($path, $params)
    {
        try {
            $url = $this->url . $path;
            if (!is_null($params)) {
                return $this->sesiones->request('post', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer ' . $this->token,
                    ],
                    "form_params" => $params
                ]);
            } else {
                return $this->sesiones->request('post', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer ' . $this->token,
                    ]
                ]);

            }
        } catch (\Exception $e) {
            if ($e->getCode() == 500) {
                alert()->error('Error de Conexion.', 'Fallo con exito. ')->persistent(true);
                return redirect()->back()->with('error', 'Error de conexión con el sistema SPID, contacta al desarrollador');
                //return redirect()->back()->withErrors(['msg' => '']);
            } else {
                return redirect()->back()->withErrors(['msg' => 'Error de conexión con el sistema SPID, contacta al desarrollador']);
            }
        }
    }

}
