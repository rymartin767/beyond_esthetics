<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Pages\Actions\ButtonAction;
use Filament\Resources\Pages\EditRecord;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['video_url'] = str($data['video_url'])->after('.be/');
    
        return $data;
    }

    protected function getFormActions(): array
    {
        return array_merge(parent::getFormActions(), [
            ButtonAction::make('Clear Treatments')
                ->action('clearServiceTreatments')
                ->color('danger')
        ]);
    }
 
    public function clearServiceTreatments(): void
    {
        $this->record->treats()->detach();
        $this->record->treatments = [];
        $this->record->save();
    }
}
