<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HasilResource\Pages;
use App\Filament\Resources\HasilResource\RelationManagers;
use App\Models\Alternatif;
use App\Models\Hasil;
use App\Models\Pasien;
use App\Models\Variabel;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HasilResource extends Resource
{
    protected static ?string $model = Hasil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Hitung SPK';
    protected static ?string $navigationGroup = 'Decision Support';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pasien_id')
                    ->options(
                        Pasien::pluck('nama', 'id')
                    )
                    ->searchable(),
                Select::make('alternatif_id')
                    ->options(
                        Alternatif::pluck('nama_alternatif', 'id')
                    )->searchable(),
                // ->reactive()
                // ->afterStateUpdated(function ($state, Set $set) {
                //     $variabel = Alternatif::find($state);
                //     $set('a1', $variabel->a1 ?? null);
                //     $set('a2', $variabel->a2 ?? null);
                //     $set('a3', $variabel->a3 ?? null);
                //     $set('a4', $variabel->a4 ?? null);
                //     $set('a5', $variabel->a5 ?? null);
                // }),
                // TextInput::make('a1')->disabled(),
                // TextInput::make('a2')->disabled(),
                // TextInput::make('a3')->disabled(),
                // TextInput::make('a4')->disabled(),
                // TextInput::make('a5')->disabled(),
                Select::make('variabel_id')
                    ->options(
                        Variabel::pluck('nama_variabel', 'id')
                    )->searchable(),
                // ->reactive()
                // ->afterStateUpdated(function ($state, Set $set) {
                //     $variabel = Variabel::find($state);
                //     $set('bobot', $variabel->bobot ?? null);
                // }),
                // TextInput::make('bobot')->disabled(),
                // TextInput::make('nilai'),
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
            'index' => Pages\ListHasils::route('/'),
            'create' => Pages\CreateHasil::route('/create'),
            'edit' => Pages\EditHasil::route('/{record}/edit'),
        ];
    }
}
