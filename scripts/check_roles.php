<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;

$emails = ['admin@example.com','test@example.com'];
foreach ($emails as $e) {
    $u = User::where('email', $e)->first();
    if (! $u) {
        echo "$e: no-user\n";
        continue;
    }
    $roles = $u->getRoleNames()->toArray();
    echo "$e: " . (count($roles) ? implode(',', $roles) : 'no-role') . "\n";
}
