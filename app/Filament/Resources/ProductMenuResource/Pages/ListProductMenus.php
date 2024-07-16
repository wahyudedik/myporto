<?php

namespace App\Filament\Resources\ProductMenuResource\Pages;

use App\Filament\Resources\ProductMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductMenus extends ListRecords
{
    protected static string $resource = ProductMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
