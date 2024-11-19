<?php

namespace App\Filament\Resources\PerhitunganHasilResource\Pages;

use App\Filament\Resources\PerhitunganHasilResource;
use App\Filament\Resources\PerhitunganHasilResource\Widgets\ItemPerhitunganWidget;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreatePerhitunganHasil extends CreateRecord
{
    protected static string $resource = PerhitunganHasilResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('create')
                ->label(__('Simpan'))
                ->submit('create')
                ->keyBindings(['mod+s'])
        ];
    }

    protected function getRedirectUrl(): string
    {
        $id = $this->record->hasil_id;
        return route(
            'filament.admin.resources.perhitungan-hasils.create',
            [
                'id' => $id
            ]
        );
    }



    public function getFooterWidgets(): array
    {
        return [
            ItemPerhitunganWidget::make([
                'hasil_id' => request('hasil_id')
            ]),

        ];
    }
    public function getFooterWidgetsColumns(): int | array
    {
        return 1;
    }
}
