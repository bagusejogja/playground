<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RefLaporanResource\Pages;
use App\Filament\Resources\RefLaporanResource\RelationManagers;
use App\Models\RefLaporan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RefLaporanResource extends Resource
{
    protected static ?string $model = RefLaporan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('master_laporan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_ref_laporan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mapping')
                    ->maxLength(255),
                Forms\Components\Textarea::make('keterangan1')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('keterangan2')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('master_laporan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_ref_laporan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mapping')
                    ->searchable(),
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
            'index' => Pages\ListRefLaporans::route('/'),
            'create' => Pages\CreateRefLaporan::route('/create'),
            'edit' => Pages\EditRefLaporan::route('/{record}/edit'),
        ];
    }
}
