<?php

namespace App\Filament\Resources\ProductMenuResource\Pages;

use App\Filament\Resources\ProductMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductMenu extends EditRecord
{
    protected static string $resource = ProductMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
