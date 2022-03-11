<?php

namespace App\Filament\Resources\EmployeeResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\RelationManagers\MorphManyRelationManager;

class EmployeeImageRelationManager extends MorphManyRelationManager
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
                    ->directory('images/employees')
                    ->visibility('public'),
                Hidden::make('tag')
                    ->default('portrait')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('url')
                    ->limit(30)
                    ->label('S3 URL'),
                TextColumn::make('tag')
            ])
            ->filters([
                //
            ]);
    }
}
