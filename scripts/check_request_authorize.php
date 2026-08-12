<?php
require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Http\Kernel::class)->bootstrap();

use App\Models\User;
use App\Http\Requests\Admin\StoreChatGroupRequest;

$admin = User::where('email','admin@example.com')->first();
if (! $admin) {
    echo "admin@example.com not found\n";
    exit(1);
}

auth()->login($admin);

$request = new StoreChatGroupRequest();

echo 'Authenticated as: ' . auth()->user()->email . "\n";
echo 'Roles: ' . implode(', ', auth()->user()->getRoleNames()->toArray()) . "\n";
echo 'StoreChatGroupRequest::authorize() => ' . ( $request->authorize() ? 'true' : 'false') . "\n";
