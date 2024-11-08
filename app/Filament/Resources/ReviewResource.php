<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Review;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ReviewResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReviewResource\RelationManagers;
use Filament\Forms\Components\Group;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Review Details')->schema([
                    Group::make()->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(120)
                            ->placeholder('Reviewer’s name'),



                        TextInput::make('role')
                            ->required()
                            ->maxLength(120)
                            ->placeholder('Reviewer’s role (e.g., CEO, Developer)'),

                        Textarea::make('comment')
                            ->required()
                            ->maxLength(400)
                            ->placeholder('Enter the review comment')
                            ->rows(4)
                            ->helperText('Max 400 characters.'),
                    ])->columnSpan(3),

                    Group::make()->schema([
                        FileUpload::make('profile')
                            ->required()
                            ->label('Profile Thumbnail')
                            ->disk('public')
                            ->directory('reviews/profile')
                            ->image()
                            ->imagePreviewHeight('150')
                            ->maxSize(1024)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->imageResizeTargetWidth(120)
                            ->imageResizeTargetHeight(120)
                            ->imageCropAspectRatio('1:1')
                            ->helperText('Upload a 120x120px profile thumbnail.'),
                    ])->columnSpan(1),
                ])->columns(4)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->limit(30),
                ImageColumn::make('profile')->label('Profile Thumbnail'),
                TextColumn::make('role')->label('Role')->limit(30),
                TextColumn::make('comment')->label('Comment')->limit(50),
                TextColumn::make('created_at')->label('Date Created')->date(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
