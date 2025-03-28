<?php

namespace App\Filament\Admin\Pages;

use App\Filament\Admin\Resources\NodeResource\Pages\CreateNode;
use App\Filament\Admin\Resources\NodeResource\Pages\ListNodes;
use App\Models\Egg;
use App\Models\Node;
use App\Models\Server;
use App\Models\User;
use App\Services\Helpers\SoftwareVersionService;
use Filament\Actions\CreateAction;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'tabler-layout-dashboard';

    protected static string $view = 'filament.pages.dashboard';

    protected ?string $heading = '';

    public function getTitle(): string
    {
        return trans('admin/dashboard.title');
    }

    public static function getNavigationLabel(): string
    {
        return trans('admin/dashboard.title');
    }

    protected static ?string $slug = '/';

    private SoftwareVersionService $softwareVersionService;

    public function mount(SoftwareVersionService $softwareVersionService): void
    {
        $this->softwareVersionService = $softwareVersionService;
    }

    public function getViewData(): array
    {
        return [
            'inDevelopment' => config('app.version') === 'canary',
            'version' => $this->softwareVersionService->currentPanelVersion(),
            'latestVersion' => $this->softwareVersionService->latestPanelVersion(),
            'isLatest' => $this->softwareVersionService->isLatestPanel(),
            'eggsCount' => Egg::query()->count(),
            'nodesList' => ListNodes::getUrl(),
            'nodesCount' => Node::query()->count(),
            'serversCount' => Server::query()->count(),
            'usersCount' => User::query()->count(),

            'devActions' => [
                CreateAction::make()
                    ->label(trans('admin/dashboard.sections.intro-developers.button_issues'))
                    ->icon('tabler-brand-github')
                    ->url('https://github.com/pelican-dev/panel/issues', true),
            ],
            'updateActions' => [
                CreateAction::make()
                    ->label(trans('admin/dashboard.sections.intro-update-available.heading'))
                    ->icon('tabler-clipboard-text')
                    ->url('https://pelican.dev/docs/panel/update', true)
                    ->color('warning'),
            ],
            'nodeActions' => [
                CreateAction::make()
                    ->label(trans('admin/dashboard.sections.intro-first-node.button_label'))
                    ->icon('tabler-server-2')
                    ->url(CreateNode::getUrl()),
            ],
            'supportActions' => [
                CreateAction::make()
                    ->label(trans('admin/dashboard.sections.intro-support.button_donate'))
                    ->icon('tabler-cash')
                    ->url('https://pelican.dev/donate', true)
                    ->color('success'),
            ],
            'helpActions' => [
                CreateAction::make()
                    ->label(trans('admin/dashboard.sections.intro-help.button_docs'))
                    ->icon('tabler-speedboat')
                    ->url('https://pelican.dev/docs', true),
            ],
        ];
    }
}
