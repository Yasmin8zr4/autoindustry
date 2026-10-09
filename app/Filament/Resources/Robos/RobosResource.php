<?php

namespace App\Filament\Resources\Robos;

use App\Filament\Resources\Robos\Pages\CreateRobos;
use App\Filament\Resources\Robos\Pages\EditRobos;
use App\Filament\Resources\Robos\Pages\ListRobos;
use App\Filament\Resources\Robos\Schemas\RobosForm;
use App\Filament\Resources\Robos\Tables\RobosTable;
use App\Models\Robos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RobosResource extends Resource
{
    protected static ?string $model = Robos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'model';

    public static function form(Schema $schema): Schema
    {
        return RobosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RobosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRobos::route('/'),
            'create' => CreateRobos::route('/create'),
            'edit' => EditRobos::route('/{record}/edit'),
        ];
    }
}
