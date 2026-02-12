<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Blogs';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Blog Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Forms\Components\Select::make('blog_category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\TextInput::make('author_name')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\DatePicker::make('date')
                            ->required(),
                    ])->columns(2),

                Section::make('SEO')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),

                        Forms\Components\Textarea::make('meta_description')
                            ->rows(3),

                        Forms\Components\TextInput::make('meta_keyword')
                            ->maxLength(255),
                    ])->columns(2),

                Section::make('Content')
                    ->schema([
                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'h2',
                                'h3',
                                'bulletList',
                                'orderedList',
                                'blockquote',
                                'link',
                                'undo',
                                'redo',
                            ]),

                        FileUpload::make('image_path')
                            ->label('Featured Image')
                            ->disk('public')
                            ->directory('blogs')
                            ->image()
                            ->imageEditor()
                            ->columnSpanFull(),

                        Forms\Components\Select::make('tags')
                            ->label('Tags')
                            ->relationship('tags', 'name')
                            ->multiple()
                            ->searchable()
                            ->preload(),
                    ]),

                Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->inline(false)
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Image')
                    ->disk('public')
                    ->rounded()
                    ->size(50),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->title),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('author_name')
                    ->label('Author')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('date')
                    ->date('d M Y')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active / Inactive')
                    ->placeholder('All Blogs')
                    ->trueLabel('Active only')
                    ->falseLabel('Inactive only'),

                Tables\Filters\SelectFilter::make('blog_category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),
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

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit'   => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
