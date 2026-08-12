<?php
require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Http\Kernel::class)->bootstrap();

use App\Models\User;

$all = User::orderBy('id')->get();
echo "Total users: " . count($all) . "\n";
foreach ($all as $u) {
    $roles = implode(',', $u->getRoleNames()->toArray());
    $status = $u->status ? '1' : '0';
    echo "{$u->id}\t{$u->email}\tstatus:{$status}\troles:{$roles}\n";
}

$users = User::role('User')->where('status', true)->orderBy('name')->get();
echo "\nUsers with role 'User' and status=true: " . count($users) . "\n";
foreach ($users as $u) {
    echo "{$u->id}\t{$u->email}\n";
}
