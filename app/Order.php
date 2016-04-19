<?php

namespace App;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer', 'unitNumber', 'truck'];

    public function stages() {
        return $this->hasMany('App\Stage');
    }

    public static function getFromAcumatica($orderNbr) {
        $auth = ['auth' => [env('ACUMATICA_USERNAME'), env('ACUMATICA_PASSWORD')]];
        $resource = "SalesOrder('${orderNbr}')/?\$format=json";
        $client = new Client(['base_uri' => env('ACUMATICA_ENDPOINT')]);
        $res = $client->request('GET', $resource, $auth);
        $attributes = json_decode($res->getBody());

        $data = [
            'customer' => $attributes->CustomerName,
            'unitNumber' => $attributes->OrderNbr,
            'truck' => 'Truck Data',
        ];

        return new Order($data);
    }
}
