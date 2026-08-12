<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Models\User;
use Illuminate\Http\Request;

$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Http\Kernel::class)->bootstrap();

$request = Request::capture();
$request->setRouteResolver(function () {
    return null;
});

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->bootstrap();

$user = auth()->user();
if (! $user) {
    echo "No authenticated user.\n";
    exit(0);
}

echo "Authenticated user: {$user->email}\n";
echo "Roles: " . implode(', ', $user->getRoleNames()->toArray()) . "\n";
