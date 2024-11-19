<?php

namespace App\Filament\Resources\PerhitunganHasilResource\Pages;

use App\Filament\Resources\PerhitunganHasilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerhitunganHasils extends ListRecords
{
    protected static string $resource = PerhitunganHasilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
