<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Filament\Resources\FaqResource\RelationManagers;
use App\Models\Faq;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('service_id')
                    ->label('Service')
                    ->options(Service::all()->pluck('name', 'id'))
                    ->searchable(),
                TextInput::make('question')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                RichEditor::make('answer')
                    ->required()
                    ->toolbarButtons(['bold']),
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
                    ->label('FAQ Service'),
                TextColumn::make('question')
                    ->wrap(),
                TextColumn::make('answer')
                    ->limit(25)
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
