<?php
// app/Http/Kernel.php

protected $routeMiddleware = [
    // Other middleware...
    'role' => \App\Http\Middleware\CheckUserRole::class, // Ensure no extra space here
];
