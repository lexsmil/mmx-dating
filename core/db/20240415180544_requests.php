<?php

declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;
use Phinx\Migration\AbstractMigration;

final class Requests extends AbstractMigration
{
    public function up(): void
    {
        $schema = Manager::schema();
        $schema->create(
            'mmx_dating_requests',
            static function (Blueprint $table) {
                $table->id();
                $table->foreignId('event_id')
                    ->constrained('mmx_dating_events')->restrictOnDelete();
                $table->string('name');
                $table->string('email');
                $table->string('phone');
                $table->tinyInteger('age')->unsigned();
                $table->boolean('sex');
                $table->boolean('active')->default(true);
                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        $schema = Manager::schema();
        $schema->drop('mmx_dating_requests');
    }
}
