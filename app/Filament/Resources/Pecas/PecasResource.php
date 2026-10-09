<?php

namespace App\Filament\Resources\Pecas;

use App\Filament\Resources\Pecas\Pages\CreatePecas;
use App\Filament\Resources\Pecas\Pages\EditPecas;
use App\Filament\Resources\Pecas\Pages\ListPecas;
use App\Filament\Resources\Pecas\Schemas\PecasForm;
use App\Filament\Resources\Pecas\Tables\PecasTable;
use App\Models\Pecas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PecasResource extends Resource
{
    protected static ?string $model = Pecas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PecasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PecasTable::configure($table);
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
            'index' => ListPecas::route('/'),
            'create' => CreatePecas::route('/create'),
            'edit' => EditPecas::route('/{record}/edit'),
        ];
    }
}
