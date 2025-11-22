<?php

namespace App\Filament\Resources\Notices\Tables;

use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class NoticesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('শিরোনাম')
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('status')
                    ->label('Status')
                    ->getStateUsing(fn($record) => $record->status === 'published')
                    ->updateStateUsing(function ($record, $state) {
                        $newStatus = $state ? 'published' : 'draft';
                        $record->update([
                            'status' => $newStatus,
                        ]);
                        return $state;
                    })
                    ->tooltip('Click to toggle status')

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
