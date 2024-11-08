<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\OurTeam;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OurTeamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OurTeamResource\RelationManagers;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;

class OurTeamResource extends Resource
{
    protected static ?string $model = OurTeam::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Team Member Details')->schema([
                    Group::make()->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(120)
                            ->placeholder('Team member name'),

                        TextInput::make('role')
                            ->required()
                            ->maxLength(120)
                            ->placeholder('Team member role (e.g., Developer, Manager)'),
                    ])->columnSpan(3),

                    FileUpload::make('profile')
                        ->required()
                        ->label('Profile Image')
                        ->disk('public')
                        ->directory('our_team/profile')
                        ->image()
                        ->imagePreviewHeight('150')
                        ->maxSize(1024)
                        ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                        ->imageResizeTargetWidth(200)
                        ->imageResizeTargetHeight(200)
                        ->imageCropAspectRatio('1:1')
                        ->helperText('Upload a 200x200px profile image.')
                        ->columnSpan(1),

                    Repeater::make('social_media')
                        ->label('Social Media Links')
                        ->schema([
                            Select::make('platform')
                                ->label('Platform')
                                ->options([
                                    'fb' => 'Facebook',
                                    'tw' => 'Twitter',
                                    'tg' => 'Telegram',
                                    'ld' => 'Linkdin',
                                ])
                                ->required()
                                ->columnSpan(1),
                            TextInput::make('url')
                                ->label('Profile URL')
                                ->url()
                                ->required()
                                ->columnSpan(2)
                                ->placeholder('https://social-media.com/profile')
                        ])
                        ->createItemButtonLabel('Add New Link')
                        ->collapsible()
                        ->columns(3)
                        ->columnSpanFull()
                        ->nullable(),
                ])->columns(4)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->limit(30),
                ImageColumn::make('profile')->label('Profile Image'),
                TextColumn::make('role')->label('Role')->limit(30),
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
            'index' => Pages\ListOurTeams::route('/'),
            'create' => Pages\CreateOurTeam::route('/create'),
            'edit' => Pages\EditOurTeam::route('/{record}/edit'),
        ];
    }
}
