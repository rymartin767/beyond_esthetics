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
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
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
                TextInput::make('name')->rules(['required', 'min:5', 'max:35'])->unique(ignorable: fn (?Service $record): ?Service => $record),
                Select::make('type')->options(['medical' => 'Medical', 'spa' => 'Spa', 'injectables' => 'Injectables']),
                MultiSelect::make('locations')->options(['ashland' => 'Ashland', 'ontario' => 'Ontario']),
                TextInput::make('description')->rules(['required', 'string', 'min:5', 'max:250']),
                RichEditor::make('bullets')->rules(['nullable']),
                TextInput::make('msrp')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(10000)
                    ->mask(fn (TextInput\Mask $mask) => $mask->money('$', ',', 2))
                    ->label('MSRP'),
                FileUpload::make('image_urls')
                ->rules([
                    'required',
                    'file',
                    'mimes:png,jpg'
                ])
                ->disk('s3')
                ->directory('images/services')
                ->visibility('public')
                ->multiple()
                ->enableReordering(),
                TextInput::make('video_urls')->nullable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                IconColumn::make('type')
                    ->options([
                        'heroicon-o-heart' => fn ($state): bool => $state === 'medical',
                        'heroicon-o-eye' => fn ($state): bool => $state === 'spa',
                        'heroicon-o-chip' => fn ($state): bool => $state === 'injectables',
                    ]),
                TextColumn::make('locations'),
                TextColumn::make('msrp')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
