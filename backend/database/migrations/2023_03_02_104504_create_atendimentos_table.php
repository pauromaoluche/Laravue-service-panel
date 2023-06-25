<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gerado_por');
            $table->foreign('gerado_por')->references('id')->on('users');
            $table->unsignedBigInteger('provedor_id');
            $table->foreign('provedor_id')->references('id')->on('provedors')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('service_type_id')
                ->constrained()
                ->cascadeOnUpdate();
            $table->integer('prioridade');
            $table->integer('protocolo');
            $table->date('data_prev');
            $table->text('desc');
            $table->text('desc_fim')->nullable();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate();
            $table->foreignId('setor_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
                $table->foreignId('status_atend')
                ->constrained()
                ->cascadeOnUpdate();
            $table->dateTime('data_agend')->nullable()->default(null);
            $table->dateTime('data_fim')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atendimentos');
    }
};
