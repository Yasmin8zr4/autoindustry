<?php

namespace App\Filament\Resources\Robos\Pages;

use App\Filament\Resources\Robos\RobosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRobos extends EditRecord
{
    protected static string $resource = RobosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
