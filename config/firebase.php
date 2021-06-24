<?php

return [
    'server_api_key' => env('FIREBASE_SERVER_API_KEY', ''),
    'project_id' => env('FIREBASE_PROJECT_ID', ''),
    'auth_domain' => env('FIREBASE_AUTH_DOMAIN', ''),

    'web_app_id' => env('FIREBASE_WEB_APP_ID', ''),
    'web_api_key' => env('FIREBASE_WEB_API_KEY', ''),
    'web_app_sender_id' => env('FIREBASE_WEB_APP_SENDER_ID', ''),
    'web_app_measurement_id' => env('FIREBASE_WEB_APP_MEASUREMENT_ID', ''),
    'web_app_storage_bucket' => env('FIREBASE_WEB_APP_STORAGE_BUCKET', ''),
];
