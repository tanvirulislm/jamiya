<?php

namespace App\Filament\Resources\Jamiyas;

use App\Filament\Resources\Jamiyas\Pages\CreateJamiya;
use App\Filament\Resources\Jamiyas\Pages\EditJamiya;
use App\Filament\Resources\Jamiyas\Pages\ListJamiyas;
use App\Filament\Resources\Jamiyas\Schemas\JamiyaForm;
use App\Filament\Resources\Jamiyas\Tables\JamiyasTable;
use App\Models\Jamiya;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JamiyaResource extends Resource
{
    protected static ?string $model = Jamiya::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return JamiyaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JamiyasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJamiyas::route('/'),
            'create' => CreateJamiya::route('/create'),
            'edit' => EditJamiya::route('/{record}/edit'),
        ];
    }
}
