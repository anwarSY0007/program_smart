<?php

namespace App\Filament\Resources\VariabelResource\Pages;

use App\Filament\Resources\VariabelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVariabel extends EditRecord
{
    protected static string $resource = VariabelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
