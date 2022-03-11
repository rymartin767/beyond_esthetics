<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Special;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\MultiSelect;
use App\Filament\Resources\SpecialResource\Pages;
use App\Filament\Resources\SpecialResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class SpecialResource extends Resource
{
    protected static ?string $model = Special::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                MultiSelect::make('locations')->options(['ashland' => 'Ashland', 'ontario' => 'Ontario'])->rules('required'),
                DatePicker::make('start_date')->rules(['required', 'date']),
                DatePicker::make('end_date')->rules(['required', 'date']),
                TextInput::make('sale_price')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(10000)
                    ->mask(fn (TextInput\Mask $mask) => $mask->money('$', ',', 2))
                    ->rules('required')
                    ->label('Sale Price'),
                RichEditor::make('description')->rules(['required', 'string'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('sale_price'),
                TextColumn::make('start_date'),
                TextColumn::make('end_date'),
                TextColumn::make('locations'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\SpecialImageRelationManager::class,
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSpecials::route('/'),
            'create' => Pages\CreateSpecial::route('/create'),
            'edit' => Pages\EditSpecial::route('/{record}/edit'),
        ];
    }
}
