<?php

namespace App\Filament\Components\Tables\Actions;

use App\Models\Egg;
use App\Services\Eggs\Sharing\EggExporterService;
use Filament\Tables\Actions\Action;

class ExportEggAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'export';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(trans('filament-actions::export.modal.actions.export.label'));

        $this->icon('tabler-download');

        $this->authorize(fn () => auth()->user()->can('export egg'));

        $this->action(fn (EggExporterService $service, Egg $egg) => response()->streamDownload(function () use ($service, $egg) {
            echo $service->handle($egg->id);
        }, 'egg-' . $egg->getKebabName() . '.json'));
    }
}
