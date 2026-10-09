<?php

namespace App\Filament\Resources\Robos\Pages;

use App\Filament\Resources\Robos\RobosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRobos extends ListRecords
{
    protected static string $resource = RobosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
