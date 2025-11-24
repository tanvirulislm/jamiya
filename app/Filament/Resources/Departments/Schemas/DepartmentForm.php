<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->label('বিভাগ')
                    ->options([
                        'kitab' => 'কিতাব বিভাগ',
                        'hifz' => 'হিফজ বিভাগ',
                        'nurani' => 'নূরানী বিভাগ',
                        'school' => 'স্কুল বিভাগ',
                    ])
                    ->required(),
                RichEditor::make('description')
                    ->label('বিবরণ')
                    ->columnSpanFull(),
                Repeater::make('classes')
                    ->label('ক্লাস সমূহ')
                    ->schema([
                        TextInput::make('name')
                            ->label('ক্লাসের নাম')
                            ->required(),
                    ])
                    ->columns(1)
                    ->columnSpanFull(),
                Repeater::make('requirements')
                    ->label('ভর্তির শর্তসমূহ')
                    ->schema([
                        Textarea::make('text')
                            ->label('শর্ত')
                            ->rows(2)
                            ->required(),
                    ])
                    ->columns(1)
                    ->columnSpanFull(),
            ]);
    }
}
