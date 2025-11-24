<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Slider Image')
                    ->directory('sliders')
                    ->disk('public')
                    ->image()
                    ->imageEditor()
                    ->required(),
            ]);
    }
}
