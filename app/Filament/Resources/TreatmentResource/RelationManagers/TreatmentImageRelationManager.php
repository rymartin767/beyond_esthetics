<?php

namespace App\Filament\Resources\TreatmentResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\RelationManagers\MorphManyRelationManager;

class TreatmentImageRelationManager extends MorphManyRelationManager
{
    protected static string $relationship = 'image';

    protected static ?string $recordTitleAttribute = 'name';

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
                ->directory('images/treatments')
                ->visibility('public'),
            Hidden::make('tag')
                ->default('treatment') // is this right
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
