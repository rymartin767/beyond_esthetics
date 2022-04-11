<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TreatmentResource\Pages;
use App\Filament\Resources\TreatmentResource\RelationManagers;
use App\Models\Treatment;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class TreatmentResource extends Resource
{
    protected static ?string $model = Treatment::class;

    protected static ?string $navigationIcon = 'heroicon-o-share';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                RichEditor::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('description')
                    ->limit(50),
                TextColumn::make('image_count')->counts('image')
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\TreatmentImageRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTreatments::route('/'),
            'create' => Pages\CreateTreatment::route('/create'),
            'edit' => Pages\EditTreatment::route('/{record}/edit'),
        ];
    }
}
