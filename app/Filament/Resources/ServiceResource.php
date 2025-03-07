<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // create file upload for icon
                    FileUpload::make('icon')
                        ->image()
                        ->avatar(),
                // create text field for title
                TextInput::make('title')
                    ->required()
                    ->placeholder('Enter title'),
                // create text field for description
                Textarea::make('description')
                    ->required()
                    ->placeholder('Enter description'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //add column for icon imagecolumn
                ImageColumn::make('icon')
                    ->label('Icon')
                    ->extraAttributes(['referrerpolicy' => 'no-referrer']),
                //add column for title
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),
                //add column for description
                TextColumn::make('description')
                    ->wrap()
                    ->sortable()
                    ->searchable()
                    ->label('Description'),
            ])
            ->reorderable('sort')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
