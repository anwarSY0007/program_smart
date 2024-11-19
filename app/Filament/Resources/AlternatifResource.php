<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlternatifResource\Pages\{ListAlternatifs, CreateAlternatif, EditAlternatif};
use App\Filament\Resources\AlternatifResource\RelationManagers;
use App\Models\Alternatif;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\{BulkActionGroup, DeleteBulkAction, EditAction};
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlternatifResource extends Resource
{
    protected static ?string $model = Alternatif::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Data Alternatif';
    protected static ?string $navigationGroup = 'Support';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_alternatif')
                    ->required()
                    ->maxLength(255),
                TextInput::make('a1'),
                TextInput::make('a2'),
                TextInput::make('a3'),
                TextInput::make('a4'),
                TextInput::make('a5'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_alternatif')
                    ->searchable(),
                TextColumn::make('a1'),
                TextColumn::make('a2'),
                TextColumn::make('a3'),
                TextColumn::make('a4'),
                TextColumn::make('a5'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => ListAlternatifs::route('/'),
            'create' => CreateAlternatif::route('/create'),
            'edit' => EditAlternatif::route('/{record}/edit'),
        ];
    }
}
