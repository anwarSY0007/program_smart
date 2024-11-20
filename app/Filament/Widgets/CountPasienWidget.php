<?php

namespace App\Filament\Widgets;

use App\Models\{Alternatif, Pasien, Variabel};
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CountPasienWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $pasienActive = Pasien::count();
        $alternatifCount = Alternatif::count();
        $varCount = Variabel::count();
        return [
            Stat::make('Pasien', $pasienActive)
                ->description($pasienActive)
                ->descriptionIcon('heroicon-o-user-group')
                ->descriptionColor('primary')
                ->color('primary'),
            Stat::make('Alternatif', $alternatifCount)
                ->description($alternatifCount)
                ->descriptionIcon('heroicon-o-user-group')
                ->descriptionColor('warning')
                ->color('warning'),
            Stat::make('Variabel', $varCount)
                ->description($varCount)
                ->descriptionColor('success')
                ->color('success')
                ->descriptionIcon('heroicon-o-user-group'),
        ];
    }
}
