<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggaranResource\Pages;
use App\Filament\Resources\AnggaranResource\RelationManagers;
use App\Models\Anggaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnggaranResource extends Resource
{
    protected static ?string $model = Anggaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('rkat_kegiatan_id')
                    ->numeric(),
                Forms\Components\TextInput::make('prioritas')
                    ->maxLength(100),
                Forms\Components\TextInput::make('tahun_anggaran')
                    ->numeric(),
                Forms\Components\TextInput::make('kode_organisasi')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_organisasi')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kelompok_indikator')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_tujuan')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_tujuan')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kode_indikator_tujuan')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_indikator_tujuan')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kode_sasaran')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_sasaran')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kode_indikator_sasaran')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_indikator_sasaran')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kode_program')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_program')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kode_indikator_program')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_indikator_program')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kode_kegiatan')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_kegiatan')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('deskripsi_kegiatan')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_approved'),
                Forms\Components\TextInput::make('sumberdana_nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('rkat_belanja_id')
                    ->numeric(),
                Forms\Components\TextInput::make('rkat_akun_belanja')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_akun_belanja')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('uraian')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('volume')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('satuan')
                    ->maxLength(100),
                Forms\Components\TextInput::make('harga_satuan')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('jumlah')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('jumlah_asli')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('jumlah_realisasi')
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_approved_belanja'),
                Forms\Components\Toggle::make('is_lock'),
                Forms\Components\TextInput::make('id_penerimaan')
                    ->numeric(),
                Forms\Components\TextInput::make('akun')
                    ->maxLength(100),
                Forms\Components\Textarea::make('nama_akun_penerimaan')
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('rncnpengeluaran_tgl'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rkat_kegiatan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prioritas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_anggaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode_organisasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelompok_indikator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_tujuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_indikator_tujuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_sasaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_indikator_sasaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_program')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_indikator_program')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_kegiatan')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_approved')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sumberdana_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rkat_belanja_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rkat_akun_belanja')
                    ->searchable(),
                Tables\Columns\TextColumn::make('volume')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('satuan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_satuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_asli')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_realisasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_approved_belanja')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_lock')
                    ->boolean(),
                Tables\Columns\TextColumn::make('id_penerimaan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('akun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rncnpengeluaran_tgl')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListAnggarans::route('/'),
            'create' => Pages\CreateAnggaran::route('/create'),
            'edit' => Pages\EditAnggaran::route('/{record}/edit'),
        ];
    }
}
