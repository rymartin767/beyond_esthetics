<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Special;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\SpecialResource\Pages;
use App\Filament\Resources\SpecialResource\RelationManagers;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;

class SpecialResource extends Resource
{
    protected static ?string $model = Special::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('start_date')->rules(['required', 'date']),
                DatePicker::make('end_date')->rules(['required', 'date']),
                MultiSelect::make('locations')->options(['ashland' => 'Ashland', 'ontario' => 'Ontario'])->rules('required'),
                TextInput::make('sale_price')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(10000)
                    ->mask(fn (TextInput\Mask $mask) => $mask->money('$', ',', 2))
                    ->rules('required')
                    ->label('Sale Price'),
                RichEditor::make('description')->rules(['required', 'string']),
                FileUpload::make('image_url')
                ->rules([
                    'nullable',
                    'file',
                    'mimes:png,jpg'
                ])
                ->disk('s3')
                ->directory('images/specials')
                ->visibility('public')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListSpecials::route('/'),
            'create' => Pages\CreateSpecial::route('/create'),
            'edit' => Pages\EditSpecial::route('/{record}/edit'),
        ];
    }
}
