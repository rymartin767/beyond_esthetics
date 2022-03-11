<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\MultiSelect;
use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->minValue(5)
                    ->maxValue(35)
                    ->unique(ignorable: fn (?Service $record): ?Service => $record),
                Select::make('type')
                    ->options(['medical' => 'Medical', 'spa' => 'Spa', 'injectables' => 'Injectables']),
                MultiSelect::make('locations')
                    ->required()
                    ->options(['ashland' => 'Ashland', 'ontario' => 'Ontario']),
                MultiSelect::make('treatments')
                    ->options(config('general.services.treatments')),
                TextInput::make('description')
                    ->required()
                    ->minValue(5)
                    ->maxValue(250),
                RichEditor::make('bullets')
                    ->nullable(),
                TextInput::make('msrp')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(10000)
                    ->mask(fn (TextInput\Mask $mask) => $mask->money('$', ',', 2))
                    ->label('MSRP'),
                TextInput::make('video_url')
                    ->nullable()
                    ->rules([
                        'string',
                        'min:5',
                        'max:50',
                        'starts_with:https://youtu.be/'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('type'),
                TextColumn::make('locations'),
                TextColumn::make('msrp'),
                IconColumn::make('video_url')
                    ->options([
                        'heroicon-o-check' => fn ($state): bool => $state !== null,
                        'heroicon-o-chip' => fn ($state): bool => $state == null,
                    ]),
                TextColumn::make('images_count')->counts('images')
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ServiceImagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
