<?php

declare(strict_types=1);

namespace Camya\Filament\Tests\Support;

use Illuminate\Database\Eloquent\Factories\Factory;

final class RecordFactory extends Factory
{
    protected $model = Record::class;

    public function definition()
    {
        return [];
    }
}
