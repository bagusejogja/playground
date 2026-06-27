<?php

namespace App\Filament\Resources\RefLaporanResource\Pages;

use App\Filament\Resources\RefLaporanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRefLaporan extends EditRecord
{
    protected static string $resource = RefLaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
