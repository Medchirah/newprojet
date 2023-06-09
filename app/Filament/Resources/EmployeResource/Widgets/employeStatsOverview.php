<?php

namespace App\Filament\Resources\EmployeResource\Widgets;

use App\Models\employe;
use App\Models\departement;
use Illuminate\Foundation\Auth\User;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class employeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make(' departements number', departement::all()->count())
            ->description('existe')
            ->descriptionIcon('heroicon-s-shopping-bag')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Card::make(' Employes number', employe::all()->count())
            ->description('enregistres')
            ->descriptionIcon('heroicon-s-user')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Card::make(' Users number', User::all()->count())
            ->description('enregistres')
            ->descriptionIcon('heroicon-s-user')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success')
        ];
    }
}
