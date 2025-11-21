<?php

namespace App\Filament\Resources\Notices\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NoticeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('শিরোনাম')
                    ->maxLength(100)
                    ->required(),
                Toggle::make('status')
                    ->label('প্রকাশিত')
                    ->onColor('success')
                    ->offColor('secondary')
                    ->default(false)
                    ->required(),
            ]);
    }
}
