<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Support\Markdown;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required()
                        ->maxLength(255)
                        ->columnSpan(2)
                        ->reactive()
                        ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))), // Automatically sets the slug


                    TextInput::make('slug')
                        ->label('Slug')
                        ->unique(ignoreRecord: true)
                        ->required()
                        ->maxLength(255)
                        ->columnSpan(2),

                    Textarea::make('excerpt')
                        ->label('Excerpt')
                        ->maxLength(500)
                        ->columnSpan(2),

                    Select::make('category_id')
                        ->label('Category')
                        ->relationship('category', 'name')
                        ->nullable()
                        ->columnSpan(1),

                    Select::make('user_id')
                        ->label('Author')
                        ->relationship('user', 'name')
                        ->nullable()
                        ->columnSpan(1),

                    RichEditor::make('content')
                        ->label('Content')
                        ->disableGrammarly(true)
                        ->required()->columnSpanFull(),

                ])->columns(4),

                Section::make()->schema([
                    Group::make()->schema([
                        TextInput::make('seo_title')
                            ->label('SEO Title')
                            ->maxLength(255)
                            ->placeholder('SEO title for search engines'),
                        TagsInput::make('seo_tags')
                            ->label('SEO Tags')
                            ->placeholder('Enter to separated tags'),
                    ])->columnSpan(2),

                    Textarea::make('seo_description')
                        ->label('SEO Description')
                        ->maxLength(500)
                        ->rows(5)
                        ->placeholder('SEO description for better visibility on search engines')
                        ->columnSpan(2),

                    FileUpload::make('thumbnail')
                        ->label('Thumbnail')
                        ->image()
                        ->disk('public')
                        ->directory('post')
                        ->nullable()
                        ->columnSpan(1),

                    Toggle::make('is_published')
                        ->label('Published')
                        ->default(false)
                        ->columnSpanFull(),
                ])->columns(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->square(),

                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('user.name')
                    ->label('Author')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

                ToggleColumn::make('is_published')
                    ->label('Published')
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->date()
                    ->toggleable()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->options(Category::all()->pluck('name', 'id'))
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
