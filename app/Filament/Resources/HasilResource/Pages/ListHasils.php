<?php

namespace App\Filament\Resources\HasilResource\Pages;

use App\Filament\Resources\HasilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHasils extends ListRecords
{
    protected static string $resource = HasilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
