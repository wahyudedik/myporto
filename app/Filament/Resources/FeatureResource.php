<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeatureResource\Pages;
use App\Filament\Resources\FeatureResource\RelationManagers;
use App\Models\Feature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureResource extends Resource
{
    protected static ?string $model = Feature::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name1')
                    ->required(),
                Forms\Components\TextInput::make('name2')
                    ->required(),
                Forms\Components\TextInput::make('name3')
                    ->required(),
                Forms\Components\TextInput::make('name4')
                    ->required(),
                Forms\Components\TextInput::make('name5')
                    ->required(),
                Forms\Components\TextInput::make('name6')
                    ->required(),
                Forms\Components\TextInput::make('name7')
                    ->required(),
                Forms\Components\TextInput::make('name8')
                    ->required(),
                Forms\Components\TextInput::make('name9')
                    ->required(),
                Forms\Components\TextInput::make('name10')
                    ->required(),
                Forms\Components\TextInput::make('name11')
                    ->required(),
                Forms\Components\TextInput::make('name12')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name1'),
                Tables\Columns\TextColumn::make('name2'),
                Tables\Columns\TextColumn::make('name3'),
                Tables\Columns\TextColumn::make('name4'),
                Tables\Columns\TextColumn::make('name5'),
                Tables\Columns\TextColumn::make('name6'),
                Tables\Columns\TextColumn::make('name7'),
                Tables\Columns\TextColumn::make('name8'),
                Tables\Columns\TextColumn::make('name9'),
                Tables\Columns\TextColumn::make('name10'),
                Tables\Columns\TextColumn::make('name11'),
                Tables\Columns\TextColumn::make('name12'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListFeatures::route('/'),
            'create' => Pages\CreateFeature::route('/create'),
            'edit' => Pages\EditFeature::route('/{record}/edit'),
        ];
    }
}
