<?php

namespace App\Filament\Resources\PortofolioCategoryResource\Pages;

use App\Filament\Resources\PortofolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortofolioCategory extends EditRecord
{
    protected static string $resource = PortofolioCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
