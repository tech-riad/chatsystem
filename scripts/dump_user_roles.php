<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Models\User;

$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Http\Kernel::class)->bootstrap();

$user = User::where('email', 'admin@example.com')->first();
if (! $user) {
    echo "admin@example.com not found\n";
    exit(1);
}

echo "User: {$user->email}\n";
echo "Roles: " . implode(', ', $user->getRoleNames()->toArray()) . "\n";
echo "Has Admin? " . ($user->hasRole('Admin') ? 'yes' : 'no') . "\n";
echo "Has Super Admin? " . ($user->hasRole('Super Admin') ? 'yes' : 'no') . "\n";
