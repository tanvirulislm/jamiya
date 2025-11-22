<?php

namespace App\Filament\Resources\Principals\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PrincipalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('নাম')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('designation')
                    ->label('পদবী')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('ইমেইল')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('ফোন')
                    ->sortable()
                    ->searchable(),
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
