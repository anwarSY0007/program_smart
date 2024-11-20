<?php

namespace App\Filament\Widgets;

use App\Models\{Pasien, Perhitungan, Variabel};
use Filament\Tables;
use Filament\Tables\Table;
use EightyNine\FilamentAdvancedWidget\AdvancedTableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;

class RekapTabelWidget extends BaseWidget
{
    protected array $criteria = [
        ['label' => 'Efektivitas (30%)', 'index' => 1],
        ['label' => 'Keamanan (25%)', 'index' => 2],
        ['label' => 'Kemudahan (20%)', 'index' => 3],
        ['label' => 'Biaya (15%)', 'index' => 4],
        ['label' => 'Efek samping (10%)', 'index' => 5],
    ];
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Perhitungan::query(),
                Pasien::query()
            )
            ->columns(array_merge([
                TextColumn::make('pasien.nama')->label('Nama Pasien'),
                TextColumn::make('alternatif.nama_alternatif')->label('Nama Alternatif'),
            ], array_map(function ($criterion) {
                return TextColumn::make("alternatif.a{$criterion['index']}")
                    ->label($criterion['label'])
                    ->alignCenter()
                    // ->columnSpanFull()
                    ->getStateUsing(function ($record) use ($criterion) {
                        $variabels = Variabel::all()->keyBy('id');
                        return $record->alternatif->{"a{$criterion['index']}"} * ($variabels[$criterion['index']]?->bobot ?? 0) / 100;
                    });
            }, $this->criteria)));
    }
}
