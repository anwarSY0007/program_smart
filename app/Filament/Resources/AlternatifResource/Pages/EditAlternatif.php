<?php

namespace App\Filament\Resources\AlternatifResource\Pages;

use App\Filament\Resources\AlternatifResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlternatif extends EditRecord
{
    protected static string $resource = AlternatifResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
