<?php

namespace App\Filament\Resources\Principals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class PrincipalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('নাম')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('designation')
                    ->label('পদবী')
                    ->maxLength(100),
                TextInput::make('phone')
                    ->label('ফোন নম্বর')
                    ->maxLength(20),
                TextInput::make('email')
                    ->label('ইমেইল')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('short_message')
                    ->label('সংক্ষিপ্ত বার্তা')
                    ->columnSpanFull()
                    ->maxLength(255),
                RichEditor::make('message')
                    ->label('বার্তা')
                    ->columnSpanFull()
                    ->maxLength(65535),
                FileUpload::make('photo')
                    ->columnSpanFull()
                    ->label('ছবি'),
            ]);
    }
}
