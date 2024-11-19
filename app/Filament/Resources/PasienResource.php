<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PasienResource\Pages;
use App\Filament\Resources\PasienResource\RelationManagers;
use App\Models\Pasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Data Pasien';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->required(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->options(['L' => 'Laki -Laki', 'P' => 'Perempuan'])
                    ->default('L')
                    ->required(),
                Forms\Components\Textarea::make('alamat')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('nomor_telepon')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_rekam_medis')
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('tanggal_daftar')
                    ->required(),
                Forms\Components\Textarea::make('alergi')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('riwayat_penyakit')
                    ->columnSpanFull(),
                Forms\Components\Select::make('status_asuransi')
                    ->options(
                        ['Aktif' => 'Active', 'Tidak Aktif' => 'Non Active']
                    )
                    ->default('Aktif')
                    ->required(),
                Forms\Components\Select::make('status_pernikahan')
                    ->options(
                        ['Belum Menikah' => 'Belum Menikah', 'Menikah' => 'Menikah', 'Cerai' => 'Cerai', 'Janda/Duda' => 'Janda/Duda']
                    )
                    ->default('Belum Menikah')
                    ->required(),
                Forms\Components\Select::make('golongan_darah')
                    ->options(['A' => 'A', 'B' => 'B', 'AB' => 'B', 'O' => 'O', 'Tidak Diketahui' => 'Tidak Diketahui'])
                    ->default('Tidak Diketahui')
                    ->required(),
                Forms\Components\TextInput::make('tinggi_badan')
                    ->numeric(),
                Forms\Components\TextInput::make('berat_badan')
                    ->numeric(),
                Forms\Components\Textarea::make('catatan_khusus')
                    ->columnSpanFull(),
                Forms\Components\Select::make('status_kesehatan')
                    ->options(
                        ['Sehat' => 'Sehat', 'Sakit' => 'Sakit', 'Dalam Perawatan' => 'Dalam Perawatan']
                    )
                    ->default('Sehat')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_periksa_terakhir'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_rekam_medis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_daftar')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_asuransi'),
                Tables\Columns\TextColumn::make('status_pernikahan'),
                Tables\Columns\TextColumn::make('golongan_darah'),
                Tables\Columns\TextColumn::make('tinggi_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_kesehatan'),
                Tables\Columns\TextColumn::make('tanggal_periksa_terakhir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListPasiens::route('/'),
            'create' => Pages\CreatePasien::route('/create'),
            'edit' => Pages\EditPasien::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
