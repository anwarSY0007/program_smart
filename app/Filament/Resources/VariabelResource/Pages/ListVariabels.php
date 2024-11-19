<?php

namespace App\Filament\Resources\VariabelResource\Pages;

use App\Filament\Resources\VariabelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVariabels extends ListRecords
{
    protected static string $resource = VariabelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
