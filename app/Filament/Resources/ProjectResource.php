<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-tv';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Information')->schema([
                    Group::make()->schema([
                        TextInput::make('title')
                            ->required()
                            ->placeholder('Make a title')
                            ->maxLength(155),
                        TagsInput::make('services')
                            ->placeholder('Click enter to make services'),
                        TextInput::make('client')
                            ->label('Client name')
                            ->placeholder('Project client name')
                            ->maxLength(120)
                            ->nullable(),

                    ])->columnSpan(3),
                    Group::make()->schema([
                        FileUpload::make('thumbnail')
                            ->required()
                            ->image()
                            ->disk('public')
                            ->directory('project')
                            ->imagePreviewHeight('250')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->imageResizeTargetWidth(890)
                            ->imageResizeTargetHeight(890)
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeMode('cover'),
                        Toggle::make('status')
                            ->label('Status')
                            ->onColor('success')
                            ->offColor('danger')
                            ->onIcon('heroicon-o-check')
                            ->offIcon('heroicon-o-x-mark')
                            ->inlineLabel()
                            ->default(true)
                            ->required(),
                    ])->columnSpan(1),
                    RichEditor::make('content')
                        ->required()
                        ->columnSpanFull(),

                ])->columns(4),
                Section::make('Meta Info')->schema([
                    Group::make()->schema([
                        TextInput::make('seo_title')
                            ->maxLength(150)
                            ->placeholder('Title between 130 character')
                            ->nullable(),
                        TagsInput::make('seo_tags')
                            ->placeholder('Click enter to add tags'),

                    ])->columnSpan(1),
                    Textarea::make('seo_description')
                        ->maxLength(400)
                        ->placeholder('Description between 300 character')
                        ->rows(5)
                        ->nullable()->columnSpan(1),
                ])->description('Information for seo performance')
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->limit(50),
                ImageColumn::make('thumbnail'),
                TextColumn::make('client')->label('Client')->limit(30),
                BadgeColumn::make('status')
                    ->formatStateUsing(function (string $state): string {
                        return $state === 'active' ? 'Active' : 'Deactive';
                    })
                    ->color(function (string $state): string {
                        return $state === 'active' ? 'success' : 'danger';
                    }),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
