<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductDetailResource\Pages;
use App\Filament\Resources\ProductDetailResource\RelationManagers;
use App\Models\ProductDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductDetailResource extends Resource
{
    protected static ?string $model = ProductDetail::class;

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                ->relationship('product', 'name'),
                Forms\Components\TextInput::make('img1'),
                Forms\Components\TextInput::make('img2'),
                Forms\Components\TextInput::make('img3'),
                Forms\Components\TextInput::make('img4'),
                Forms\Components\TextInput::make('price'),
                Forms\Components\Select::make('discount_id')
                ->relationship('discount', 'name'),
                Forms\Components\TextInput::make('total_price'),
                Forms\Components\Select::make('product_category_id')
                ->relationship('product_category', 'name'),
                Forms\Components\DatePicker::make('start_date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id'),
                Tables\Columns\TextColumn::make('img1'),
                Tables\Columns\TextColumn::make('img2'),
                Tables\Columns\TextColumn::make('img3'),
                Tables\Columns\TextColumn::make('img4'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('discount_id'),
                Tables\Columns\TextColumn::make('total_price'),
                Tables\Columns\TextColumn::make('product_category_id'),
                Tables\Columns\TextColumn::make('start_date'),
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
            RelationManagers\DiscountRelationManager::class,
            RelationManagers\ProductCategoryRelationManager::class,
            RelationManagers\ProductRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductDetails::route('/'),
            'create' => Pages\CreateProductDetail::route('/create'),
            'edit' => Pages\EditProductDetail::route('/{record}/edit'),
        ];
    }
}
