<?php

namespace App\Filament\Resources\Abouts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('history')->label('History')->limit(50),
                TextColumn::make('success')->label('Success')->limit(50),
                TextColumn::make('goal')->label('Goal')->limit(50),
                TextColumn::make('future')->label('Future')->limit(50),
                TextColumn::make('mission')->label('Mission')->limit(50),
                TextColumn::make('appeal')->label('Appeal')->limit(50),
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
