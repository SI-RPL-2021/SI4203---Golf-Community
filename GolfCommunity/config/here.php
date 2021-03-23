<?php
$app_id = config("here.app_id");
$app_code = config("here.app_code");
return [
    'app_id' => env('HERE_APP_ID', "NOAPPID"),
    'app_code' => env('HERE_APP_CODE', "NOAPPCODE"),
    'lat_default' => env('HERE_LAT_DEFAULT', 0),
    'lng_default' => env('HERE_LNG_DEFAULT', 0)
];
