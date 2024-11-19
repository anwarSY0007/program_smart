<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerhitunganHasilResource\Pages;
use App\Filament\Resources\PerhitunganHasilResource\RelationManagers;
use App\Models\{Alternatif, Hasil, Pasien, Perhitungan, Variabel};
use Filament\Forms;
use Filament\Forms\Components\{Grid, Hidden, Select, TextInput};
use Filament\Forms\{Form, Set};
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerhitunganHasilResource extends Resource
{
    protected static ?string $model = Perhitungan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Hasil Hitung SPK';
    protected static ?string $navigationGroup = 'Decision Support';

    public static function form(Form $form): Form
    {
        $hasil = new Hasil();
        if (request()->filled('id')) {
            # code...
            $hasil = Hasil::find(request('id'));
        }

        return $form
            ->schema([
                Hidden::make('hasil_id')->default($hasil->id),
                TextInput::make('variabel_id')->default($hasil->variabel?->id),
                TextInput::make('pasien_id')
                    ->columnSpanFull()
                    ->disabled()
                    ->default($hasil->pasien?->nama),
                Select::make('alternatif_id')
                    ->options(
                        Alternatif::all()->pluck('nama_alternatif', 'id')
                    )
                    ->reactive()
                    ->default($hasil->alternatif?->nama_alternatif)
                    ->afterStateUpdated(function ($state, Set $set) {
                        $alternatif = Alternatif::find($state);
                        $set('a1', $alternatif->a1 ?? null);
                        $set('a2', $alternatif->a2 ?? null);
                        $set('a3', $alternatif->a3 ?? null);
                        $set('a4', $alternatif->a4 ?? null);
                        $set('a5', $alternatif->a5 ?? null);
                    }),
                Grid::make(5) // Mengatur grid dengan 5 kolom
                    ->schema([
                        TextInput::make('a1')->disabled()->columnSpan(1),
                        TextInput::make('a2')->disabled()->columnSpan(1),
                        TextInput::make('a3')->disabled()->columnSpan(1),
                        TextInput::make('a4')->disabled()->columnSpan(1),
                        TextInput::make('a5')->disabled()->columnSpan(1),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPerhitunganHasils::route('/'),
            'create' => Pages\CreatePerhitunganHasil::route('/create'),
            'edit' => Pages\EditPerhitunganHasil::route('/{record}/edit'),
        ];
    }
}
