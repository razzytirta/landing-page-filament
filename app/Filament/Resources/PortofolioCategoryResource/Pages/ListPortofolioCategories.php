<?php

namespace App\Filament\Resources\PortofolioCategoryResource\Pages;

use App\Filament\Resources\PortofolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortofolioCategories extends ListRecords
{
    protected static string $resource = PortofolioCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
