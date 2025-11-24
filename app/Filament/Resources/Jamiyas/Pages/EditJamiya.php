<?php

namespace App\Filament\Resources\Jamiyas\Pages;

use App\Filament\Resources\Jamiyas\JamiyaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJamiya extends EditRecord
{
    protected static string $resource = JamiyaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
