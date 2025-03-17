<?php

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Restaurant::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('available')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {

        Schema::table('menus', function (Blueprint $table) {
            $table->dropForeign(['restaurant_id']);
            $table->dropForeign(['category_id']);
        });

        Schema::dropIfExists('menus');
    }
};
