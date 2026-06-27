<?php

namespace App\Filament\Resources\RefLaporanResource\Pages;

use App\Filament\Resources\RefLaporanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRefLaporans extends ListRecords
{
    protected static string $resource = RefLaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
