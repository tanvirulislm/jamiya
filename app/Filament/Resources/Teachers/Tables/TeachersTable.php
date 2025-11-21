<?php

namespace App\Filament\Resources\Teachers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeachersTable
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
                TextColumn::make('category')
                    ->label('ক্যাটাগরি')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('ফোন নম্বর'),
                TextColumn::make('email')
                    ->label('ইমেইল'),
                TextColumn::make('order')
                    ->label('অর্ডার')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
