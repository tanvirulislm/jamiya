<?php

namespace App\Filament\Resources\Events\Schemas;

use Dom\Text;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('অনুষ্ঠানের শিরোনাম')
                    ->required(),
                TextInput::make('description')
                    ->label('অনুষ্ঠানের তারিখ')
                    ->required(),
                TextInput::make('icon')
                    ->label('আইকন ক্লাস')
                    ->required(),
            ]);
    }
}
