<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use Filament\Forms\Components\Textarea;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Product Details')->schema([
                    Group::make()->schema([
                        TextInput::make('title')
                            ->required()
                            ->placeholder('Product title')
                            ->columnSpanFull()
                            ->maxLength(240),
                        TextInput::make('price')
                            ->numeric()
                            ->required()
                            ->columnSpan(1)
                            ->label('Project Price')
                            ->prefix('$')
                            ->step(0.01), // Allows decimal precision

                        TextInput::make('liked_by')
                            ->numeric()
                            ->columnSpan(1)
                            ->label('Liked By')
                            ->placeholder('Number of likes'),

                        TextInput::make('link')
                            ->label('Project Link')
                            ->placeholder('https://example.com')
                            ->url()
                            ->columnSpanFull()
                            ->nullable(),


                    ])->columnSpan(3)
                        ->columns(2),

                    Group::make()->schema([
                        FileUpload::make('thumbnail')
                            ->required()
                            ->image()
                            ->disk('public')
                            ->directory('products/thumbnails')
                            ->imagePreviewHeight('250')
                            ->imageEditor()
                            ->maxSize(1024)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->imageResizeTargetWidth(500)
                            ->imageResizeTargetHeight(500)
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeMode('cover'),

                        FileUpload::make('tech')
                            // ->multiple() // Enables multiple file uploads
                            ->disk('public')
                            ->label('Use Tech logo')
                            ->directory('products/tech')
                            ->imageEditor()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(2048)
                            ->helperText('Upload technology images (up to 400 characters)'),
                    ])->columnSpan(1),

                ])->columns(4),
                Section::make('Meta Information')->schema([
                    Group::make()->schema([
                        TextInput::make('seo_title')
                            ->placeholder('Meta Title')
                            ->columnSpanFull()
                            ->maxLength(240),
                        Textarea::make('seo_description')
                            ->placeholder('Meta Description')
                            ->columnSpanFull()
                            ->maxLength(600),
                        TagsInput::make('seo_tags')
                            ->label('Meta Tags')
                            ->placeholder('Enter to separated tags'),
                    ])->columns(1),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->limit(50)->label('Title'),
                ImageColumn::make('thumbnail')->label('Thumbnail'),
                TextColumn::make('price')->label('Price')->money('USD', true),
                TextColumn::make('liked_by')->label('Likes')->sortable(),
                BooleanColumn::make('link')
                    ->label('Has Link')
                    ->getStateUsing(fn($record) => !empty($record->link)), // Shows if the link exists
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
