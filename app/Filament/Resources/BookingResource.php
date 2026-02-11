<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationGroup = 'Contact Management';

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('service')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TimePicker::make('time')
                    ->required(),
                Forms\Components\TextInput::make('duration')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('message')
                    ->nullable(),
                Forms\Components\Toggle::make('status')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('service')->sortable()->searchable(),
            TextColumn::make('date')->date(),
            TextColumn::make('time'),
            TextColumn::make('duration'),
            TextColumn::make('name')->searchable(),
            TextColumn::make('email')->searchable(),
            TextColumn::make('phone')->searchable(),
            BooleanColumn::make('status')->label('Active'),
            TextColumn::make('created_at')->dateTime(),
            TextColumn::make('updated_at')->dateTime(),
        ])
        ->filters([
            // Add filters if needed
        ])
        ->actions([
            // Change Status Button
            Action::make('changeStatus')
            ->label('Change Status')
            ->icon('heroicon-o-arrow-path') // Correct icon name
            ->action(function (Booking $record) {
                $record->status = !$record->status; // Toggle status
                $record->save();
            })
            ->color('primary')
            ->requiresConfirmation(), // Optional: Add confirmation dialog

            // View Button with Modal
            Action::make('view')
                ->label('View')
                ->icon('heroicon-o-eye')
                ->modalHeading('Booking Details')
                ->modalButton('Close')
                ->modalContent(function (Booking $record) {
                    return view('filament.booking-details', ['booking' => $record]);
                })
                ->modalWidth('lg'), // Adjust modal width

            // Delete Button
            DeleteAction::make('delete')
                ->label('Delete')
                ->icon('heroicon-o-trash')
                ->requiresConfirmation(), // Optional: Add confirmation dialog
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
