<?php
// api/index.php - Serverless Entry Router for Vercel

// Ensure working directory is project root so relative paths work
chdir(dirname(__DIR__));

$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = trim($request_uri, '/');

// Route table for project pages
if ($path === '' || $path === 'index' || $path === 'index.php') {
    require __DIR__ . '/../index.php';
} elseif ($path === 'dashboard' || $path === 'dashboard.php') {
    require __DIR__ . '/../dashboard.php';
} elseif ($path === 'auth' || $path === 'auth.php') {
    require __DIR__ . '/../auth.php';
} elseif ($path === 'contact' || $path === 'contact.php') {
    require __DIR__ . '/../contact.php';
} elseif (file_exists(__DIR__ . '/../' . $path) && !is_dir(__DIR__ . '/../' . $path)) {
    require __DIR__ . '/../' . $path;
} else {
    http_response_code(404);
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | EduPulse</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; background: #0f172a; color: #f8fafc; }
        .card { text-align: center; padding: 2.5rem; background: #1e293b; border-radius: 1rem; box-shadow: 0 10px 25px rgba(0,0,0,0.3); max-width: 450px; }
        h1 { font-size: 3rem; margin: 0 0 1rem; color: #6366f1; }
        p { color: #94a3b8; margin-bottom: 2rem; }
        a { display: inline-block; background: #6366f1; color: #fff; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; }
        a:hover { background: #4f46e5; }
    </style>
</head>
<body>
    <div class="card">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>The page you requested could not be located on the server.</p>
        <a href="/">Return to Home</a>
    </div>
</body>
</html>';
}
