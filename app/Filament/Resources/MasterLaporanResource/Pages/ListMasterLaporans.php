<?php

namespace App\Filament\Resources\MasterLaporanResource\Pages;

use App\Filament\Resources\MasterLaporanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterLaporans extends ListRecords
{
    protected static string $resource = MasterLaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
