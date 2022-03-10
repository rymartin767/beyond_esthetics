<?php

namespace App\Filament\Resources\SpecialResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\MorphManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class SpecialImageRelationManager extends MorphManyRelationManager
{
    protected static string $relationship = 'image';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('url')
                    ->rules([
                        'required',
                        'file',
                        'mimes:png,jpg'
                    ])
                    ->disk('s3')
                    ->directory('images/specials')
                    ->visibility('public'),
                Hidden::make('tag')
                    ->default('portrait') // is this right
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('url')->limit(30)->label('S3 URL'),
                TextColumn::make('tag')
            ])
            ->filters([
                //
            ]);
    }
}
