<?php

namespace App\Filament\Resources\Robos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RobosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('model')
                    ->required(),
            ]);
    }
}
