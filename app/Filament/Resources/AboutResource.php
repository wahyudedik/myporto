<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationLabel = 'About';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('description')
                    ->required(),
                Forms\Components\TextInput::make('school')
                    ->required(),
                Forms\Components\TextInput::make('major')
                    ->required(),
                Forms\Components\TextInput::make('work')
                    ->required(),
                Forms\Components\TextInput::make('hobby')
                    ->required(),
                Forms\Components\TextInput::make('technology')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('tlp')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('school'),
                Tables\Columns\TextColumn::make('major'),
                Tables\Columns\TextColumn::make('work'),
                Tables\Columns\TextColumn::make('hobby'),
                Tables\Columns\TextColumn::make('technology'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('tlp'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
