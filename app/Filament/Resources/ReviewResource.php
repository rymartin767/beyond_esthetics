<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Review;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Service;
use Faker\Provider\ar_EG\Text;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date')->required(),
                Select::make('service_id')
                    ->label('Service')
                    ->options(Service::all()->pluck('name', 'id'))
                    ->searchable(),
                TextInput::make('name')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                RichEditor::make('comments')
                    ->required(),
                Select::make('social_media')
                    ->options(['facebook' => 'Facebook', 'google' => 'Google', 'instagram' => 'Instagram'])
                    ->required(),
                TextInput::make('social_media_username')
                    ->nullable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('social_media'),
                TextColumn::make('comments')
                    ->wrap(),
                TextColumn::make('service_id')
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
