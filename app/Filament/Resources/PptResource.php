<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PptResource\Pages;
use App\Filament\Resources\PptResource\RelationManagers;
use App\Models\Ppt;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class PptResource extends Resource
{
    protected static ?string $model = Ppt::class;

    protected static ?string $label = 'Pre/Post Treatments';

    protected static ?string $navigationIcon = 'heroicon-o-refresh';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('service_id')
                    ->required()
                    ->label('Service')
                    ->options(Service::all()->pluck('name', 'id'))
                    ->searchable(),
                RichEditor::make('pre_treatment')
                    ->required()
                    ->toolbarButtons(['bold', 'bulletList', 'h2', 'h3', 'orderedList']),
                RichEditor::make('post_treatment')
                    ->required()
                    ->toolbarButtons(['bold', 'bulletList', 'h2', 'h3', 'orderedList']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('service_id')
                    ->formatStateUsing(function ($state) {
                        return \App\Models\Service::find($state)->name;
                    })
                    ->sortable()
                    ->label('Service'),
                IconColumn::make('pre_treatment')
                    ->options([
                        'heroicon-o-x-circle',
                        'heroicon-o-check' => fn ($state): bool => $state !== null,
                    ])
                    ->colors([
                        'success',
                        'danger' => fn ($state): bool => $state === null,
                    ]),
                IconColumn::make('post_treatment')
                    ->options([
                        'heroicon-o-x-circle',
                        'heroicon-o-check' => fn ($state): bool => $state !== null,
                    ])
                    ->colors([
                        'success',
                        'danger' => fn ($state): bool => $state === null,
                    ])
            ])
            ->filters([
                //
            ]);
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
            'index' => Pages\ListPpts::route('/'),
            'create' => Pages\CreatePpt::route('/create'),
            'edit' => Pages\EditPpt::route('/{record}/edit'),
        ];
    }
}
