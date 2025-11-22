<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('টাইটেল')
                    ->required(),
                TextInput::make('url')
                    ->label('ভিডিও URL আইডি')
                    ->prefix('https://www.youtube.com/watch?v=')
                    ->required(),
            ]);
    }
}
