<?php

namespace App\Filament\Resources;

use App\Models\FAQ;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FAQResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FAQResource\RelationManagers;

class FAQResource extends Resource
{
    protected static ?string $model = FAQ::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('FAQ Details')->schema([
                    TextInput::make('question')
                        ->required()
                        ->label('Question')
                        ->placeholder('Enter the question')
                        ->maxLength(255),

                    Textarea::make('answer')
                        ->required()
                        ->label('Answer')
                        ->placeholder('Enter the answer')
                        ->rows(5)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->label('Question')
                    ->limit(20)
                    ->sortable(),

                TextColumn::make('answer')
                    ->label('Answer')
                    ->limit(40),

                TextColumn::make('created_at')
                    ->label('Date Created')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListFAQS::route('/'),
            'create' => Pages\CreateFAQ::route('/create'),
            'edit' => Pages\EditFAQ::route('/{record}/edit'),
        ];
    }
}
