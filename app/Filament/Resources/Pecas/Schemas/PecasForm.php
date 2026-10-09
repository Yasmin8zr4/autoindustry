<?php

namespace App\Filament\Resources\Pecas\Schemas;

use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class PecasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('fabricante')
                    ->required(),
                TextInput::make('preco')
                    ->required()
                    ->numeric(),
                TextInput::make('quantidade')
                    ->required()
                    ->numeric(),
                TextInput::make('num_de_serie')
                    ->required(),
                Select::make('robos_id')
                    ->relationship('robos', 'model')
                    ->required(),
                TimePicker::make('vida_util')
                    ->required(),
                TextInput::make('corredor')
                    ->required(),
                TextInput::make('prateleira')
                    ->tel()
                    ->required(),
            ]);
    }
}
