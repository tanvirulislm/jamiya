<?php

namespace App\Filament\Resources\Departments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class DepartmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
    ->label('বিভাগ')
    ->formatStateUsing(function ($state) {
        return match ($state) {
            'kitab'  => 'কিতাব বিভাগ',
            'hifz'   => 'হিফজ বিভাগ',
            'nurani' => 'নূরানী বিভাগ',
            'school' => 'স্কুল বিভাগ',
            default  => 'অজানা',
        };
    })
    ->badge()
    ->color(function ($state) {
        return match ($state) {
            'kitab'  => 'success',
            'hifz'   => 'warning',
            'nurani' => 'info',
            'school' => 'danger',
            default  => 'gray',
        };
    })

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
