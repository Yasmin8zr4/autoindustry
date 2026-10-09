<?php

namespace App\Filament\Resources\Pecas\Pages;

use App\Filament\Resources\Pecas\PecasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPecas extends EditRecord
{
    protected static string $resource = PecasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
