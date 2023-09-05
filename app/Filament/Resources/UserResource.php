<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Manage Users')
                    ->description('Manage User accounts & credentials')
                    ->schema([
                        // ...
                        TextInput::make('name')
                            ->minLength(2)
                            ->nullable(false)
                            ->doesntStartWith(['admin'])
                            ->maxLength(255)->reactive(),
                        TextInput::make('phone')
                            ->tel()
                            ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/'),
                        TextInput::make('email')
                            ->email()
                            ->nullable(false)
                            ->reactive(),
                        TextInput::make('password')
                            ->confirmed()
                            ->password()
                            //we dont want to update the field when its empty. and need it hashed
                            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                            ->dehydrated(fn ($state) => filled($state))
                            // However, you want to require the password to be filled on the Create page of an admin panel resource:
                            ->required(fn (string $context): bool => $context === 'create')
                            ->autocomplete(false),
                        TextInput::make('password_confirmation')
                            ->password(),
                        TextInput::make('profile')
                            ->minLength(2)
                            ->maxLength(255),
                        TextInput::make('awards')
                            ->minLength(2)
                            ->maxLength(255),
                        Select::make('role')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->searchDebounce(400)
                            ->preload(),
                        // Select::make('role')
                        //     ->options([
                        //         'developer' => 'Developer',
                        //         'super admin' => 'Super Admin',
                        //         'company' => 'Company',
                        //     ])->reactive()
                        //     ->required(),
                        Select::make('permissions')
                            ->relationship('permissions', 'name')
                            //performs faster than using relationships
                            ->options(Permission::pluck('name', 'id'))
                            ->multiple()
                            ->preload(),
                        Checkbox::make('status'),
                    ])
                    ->collapsible()
                    ->columns(4),

                Section::make('Areas of Interest')
                    ->description('Technologies of interest')
                    ->schema([
                        // ...
                        Select::make('interests')
                            ->multiple()
                            ->options([
                                'tailwind' => 'Tailwind CSS',
                                'rust' => 'Rust',
                                'laravel' => 'Laravel',
                                'Reactjs' => 'React JS',
                            ])->columns(3),
                    ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                // TextColumn::make('interest'),
                // TextColumn::make('award'),
                TextColumn::make('created_at'),
                TextColumn::make('profile'),
                TextColumn::make('role'),
                TextColumn::make('status'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')
                ->options([
                    'cat' => 'Cat',
                    'dog' => 'Dog',
                    'rabbit' => 'Rabbit',
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
