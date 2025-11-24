<?php

namespace App\Filament\Resources\Jamiyas\Pages;

use App\Filament\Resources\Jamiyas\JamiyaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJamiyas extends ListRecords
{
    protected static string $resource = JamiyaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
