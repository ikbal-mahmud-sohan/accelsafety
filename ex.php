return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Routes that should be accessible
    'allowed_methods' => ['*'], // Allow all HTTP methods
    'allowed_origins' => ['*'], // Allow all origins (use specific domains for security)
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false, // Set to true if cookies are used for authentication
];