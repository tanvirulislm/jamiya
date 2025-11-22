<?php

namespace App\Filament\Resources\Notices\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
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
                // Select::make('status')
                //     ->label('স্ট্যাটাস')
                //     ->options([
                //         'draft' => 'Draft',
                //         'published' => 'Published',
                //     ])
                //     ->default('draft')
                //     ->required(),

            ]);
    }
}
