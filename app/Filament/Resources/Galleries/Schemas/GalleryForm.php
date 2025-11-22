<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),

                FileUpload::make('photo')
                    ->label('Photo')
                    ->image()
                    ->disk('public')
                    ->directory('galleries')
                    ->required(),

                Select::make('category')
                    ->label('Category')
                    ->options([
                        'event'        => 'Event',
                        'mahfil'       => 'Mahfil',
                        'newstudents'  => 'New Students',
                    ])
                    ->required(),
            ]);
    }
}
