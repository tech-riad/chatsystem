<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

$tests = [
    ['email' => 'admin@example.com', 'password' => '12345678'],
    ['email' => 'test@example.com', 'password' => 'password'],
];

foreach ($tests as $t) {
    $email = $t['email'];
    $password = $t['password'];

    $user = User::where('email', $email)->first();
    if (! $user) {
        echo "$email: user not found\n";
        continue;
    }

    if (! Hash::check($password, $user->password)) {
        echo "$email: invalid credentials\n";
        continue;
    }

    if ($user->hasRole('Super Admin') || $user->hasRole('Admin')) {
        echo "$email: ok -> admin.dashboard\n";
    } elseif ($user->hasRole('User')) {
        echo "$email: ok -> user.dashboard\n";
    } else {
        echo "$email: ok -> /\n";
    }
}
