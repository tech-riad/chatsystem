<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('unique_id')->unique()->after('id');

            $table->string('phone',20)->nullable()->unique()->after('email');

            $table->string('image')->nullable()->after('password');

            $table->enum('gender',['Male','Female'])->nullable();

            $table->enum('role',['admin','user'])->default('user');

            $table->boolean('status')->default(true);

            $table->timestamp('last_seen')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn([
                'unique_id',
                'phone',
                'image',
                'gender',
                'role',
                'status',
                'last_seen'
            ]);

        });
    }
};
