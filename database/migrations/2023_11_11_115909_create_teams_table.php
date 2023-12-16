<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('victoires')->default(0);
            $table->integer('defaites')->default(0);
            $table->integer('points')->default(0);
            $table->timestamps();
        });

        // Insérez les noms des équipes
        $teams = [
            ['name' => 'EST'],
            ['name' => 'USMO'],
            ['name' => 'SN'],
            ['name' => 'JSK'],
            ['name' => 'CA'],
            ['name' => 'ESG'],
            ['name' => 'JSM'],
            ['name' => 'ESS'],
            ['name' => 'DSG'],
            ['name' => 'EZS'],
        ];

        foreach ($teams as $team) {
            DB::table('teams')->insert($team);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
