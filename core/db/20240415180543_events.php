<?php

declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;
use Phinx\Migration\AbstractMigration;

final class Events extends AbstractMigration
{
    public function up(): void
    {
        $schema = Manager::schema();
        $schema->create(
            'mmx_dating_events',
            static function (Blueprint $table) {
                $table->id();
                $table->string('title')->unique();
                $table->dateTimeTz('date_start');
                $table->dateTimeTz('date_end')->nullable();
                $table->unsignedInteger('rank')->default(0);
                $table->boolean('active')->default(true);
                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        $schema = Manager::schema();
        $schema->drop('mmx_dating_events');
    }
}
