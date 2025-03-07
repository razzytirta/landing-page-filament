<?php

namespace App\Filament\Resources\PortofolioCategoryResource\Pages;

use App\Filament\Resources\PortofolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePortofolioCategory extends CreateRecord
{
    protected static string $resource = PortofolioCategoryResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
