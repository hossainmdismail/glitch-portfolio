<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    public static function getNavigationGroup(): ?string
    {
        return 'Settings';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('name')
                        ->required()
                        ->placeholder('Your name'),
                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->placeholder('Your email'),
                    TextInput::make('number')
                        ->prefix('+880')
                        ->minLength(10)
                        ->maxLength(11)
                        ->required()
                        ->placeholder('170-000-000'),
                    TextInput::make('link')
                        ->prefix('https://')
                        ->placeholder('Web Link')
                        ->url()->required(),
                    TextInput::make('address')
                        ->required()
                        ->placeholder('Street / City / Country')
                        ->columnSpan(2),
                    Textarea::make('short_description')
                        ->required()
                        ->placeholder('Short Description')
                        ->columnSpan(2),
                    Textarea::make('description')
                        ->required()
                        ->placeholder('Description')
                        ->columnSpan(2),
                    Select::make('status')->options([
                        'active' => 'Active',
                        'deactive' => 'Deactive',
                    ]),
                ])
                    ->columns(2)
                    ->columnSpan(2)
                    ->description('Basic'),

                Section::make()->schema([
                    FileUpload::make('logo')
                        ->disk('public')
                        ->directory('setting')
                        ->required(),
                    FileUpload::make('fav')
                        ->disk('public')
                        ->directory('setting')
                        ->required(),
                ])
                    ->columnSpan(1)
                    ->description('Gallery'),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('address')->limit(10),
                TextColumn::make('number'),
                TextColumn::make('link')->limit(10),
                ImageColumn::make('logo')->width(120),
                ImageColumn::make('fav')->width(120),
                TextColumn::make('status'),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
