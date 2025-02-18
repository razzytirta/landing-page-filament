<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

    //customize redirect getRedirectUrl
    public function getRedirectUrl() : String
    {
        return $this->getResource()::getUrl('index');
    }
}
