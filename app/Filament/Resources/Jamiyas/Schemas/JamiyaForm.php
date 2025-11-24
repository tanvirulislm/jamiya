<?php

namespace App\Filament\Resources\Jamiyas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class JamiyaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('টাইটেল')
                    ->required(),
                TextInput::make('description')
                    ->label('বিবরণ')
                    ->required(),

            ]);
    }
}
