<?php

namespace App\Filament\Resources\Principals\Pages;

use App\Filament\Resources\Principals\PrincipalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPrincipals extends ListRecords
{
    protected static string $resource = PrincipalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->visible(\App\Models\Principal::count() < 1),
        ];
    }
    protected function canCreate(): bool
    {
        return \App\Models\Principal::count() < 1;
    }
}
