<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Select::make('parent_id')
                        ->label('Parent Category')
                        ->relationship('parent', 'name')
                        ->nullable(),

                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    FileUpload::make('thumbnail')
                        ->label('Thumbnail')
                        ->disk('public')
                        ->directory('category')
                        ->image()
                        ->directory('thumbnails')
                        ->nullable(),
                ])->description('Basic')->columnSpan(1),

                Section::make()->schema([
                    TextInput::make('seo_title')
                        ->label('SEO Title')
                        ->placeholder('Seo Title')
                        ->maxLength(255),

                    Textarea::make('seo_description')
                        ->label('SEO Description')
                        ->placeholder('Seo Description')
                        ->maxLength(1000),

                    TagsInput::make('seo_tags')
                        ->placeholder('Seo tags')
                        ->label('SEO Tags'),
                ])->description('Seo Details')->columnSpan(1),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                ImageColumn::make('thumbnail')->label('Thumbnail')->square(),
                TextColumn::make('parent.name')->label('Parent Category')->sortable(),
                TextColumn::make('seo_title')->label('SEO Title')->limit(20),
                TextColumn::make('created_at')->label('Created At')->date(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
