<?php

namespace App\Filament\Resources\HasilResource\Pages;

use App\Filament\Resources\HasilResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateHasil extends CreateRecord
{
    protected static string $resource = HasilResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('create')
                ->label(__('Selanjutnya'))
                ->submit('create')
                ->keyBindings(['mod+s'])
        ];
    }

    protected function getRedirectUrl(): string
    {
        $id = $this->record->id;
        return route(
            'filament.admin.resources.perhitungan-hasils.create',
            [
                'id' => $id
            ]
        );
    }
}
