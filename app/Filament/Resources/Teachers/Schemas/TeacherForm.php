<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class TeacherForm
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
                    ->maxLength(100)
                    ->required(),
                TextInput::make('phone')
                    ->label('ফোন নম্বর')
                    ->maxLength(20),
                TextInput::make('email')
                    ->label('ইমেইল')
                    ->maxLength(255),
                Select::make('category')
                    ->label('ক্যাটাগরি')
                    ->options([
                        'kitab' => 'কিতাব',
                        'hifz' => 'হিফজ',
                        'girls' => 'মহিলা',
                    ])
                    ->required(),
                TextInput::make('order')
                    ->label('অর্ডার')
                    ->numeric()
                    ->required(),
                FileUpload::make('image_url')
                    ->columnSpanFull()
                    // Set storage publicly accessible disk
                    ->disk('public')
                    ->label('ছবি'),
            ]);
    }
}
