<?php

namespace App\Filament\Resources\PerhitunganHasilResource\Pages;

use App\Filament\Resources\PerhitunganHasilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerhitunganHasil extends EditRecord
{
    protected static string $resource = PerhitunganHasilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
