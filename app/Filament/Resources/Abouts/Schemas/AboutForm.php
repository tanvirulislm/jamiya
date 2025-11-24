<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('history')
                    ->label('প্রতিষ্ঠার ইতিহাস')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('success')
                    ->label('জামেয়ার সাফল্য')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('goal')
                    ->label('লক্ষ্য ও উদ্দেশ্য')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('future')
                    ->label('ভবিষ্যত পরিকল্পনা')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('appeal')
                    ->label('আকুল আবেদন')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
