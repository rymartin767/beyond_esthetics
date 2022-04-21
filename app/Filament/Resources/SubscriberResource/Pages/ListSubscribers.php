<?php

namespace App\Filament\Resources\SubscriberResource\Pages;

use App\Filament\Resources\SubscriberResource;
use Filament\Pages\Actions\ButtonAction;
use Filament\Resources\Pages\ListRecords;

class ListSubscribers extends ListRecords
{
    protected static string $resource = SubscriberResource::class;

    protected function getActions(): array
    {
        return [
            ButtonAction::make('mailchimp')
                ->label('Mailchimp Account')
                ->url('https://mailchimp.com')
                ->color('success'),
        ];
    }
}
