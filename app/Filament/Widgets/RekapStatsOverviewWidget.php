<?php

namespace App\Filament\Widgets;

use App\Models\{Alternatif, Pasien, Variabel};
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget\Stat;

class RekapStatsOverviewWidget extends BaseWidget
{
    protected static ?string $pollingInterval = null;
    protected function getStats(): array
    {
        $pasien = Pasien::count();
        $variabel = Variabel::count();
        $alternatif = Alternatif::count();
        return [
            Stat::make('Total Pasien', $pasien)
                ->icon('heroicon-o-user')
                ->backgroundColor('primary')
                ->iconBackgroundColor('success')
                ->iconPosition('start')
                ->description('The users in this period')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('gray')
                ->iconColor('success'),
            Stat::make('Total Variabel', $variabel)
                ->icon('heroicon-o-chart-bar')
                ->backgroundColor('warning')
                ->iconBackgroundColor('success')
                ->iconPosition('start')
                ->description('The users in this period')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('gray')
                ->iconColor('success'),
            Stat::make('Total Pasien', $alternatif)
                ->icon('heroicon-o-chart-pie')
                ->backgroundColor('danger')
                ->iconBackgroundColor('success')
                ->iconPosition('start')
                ->description('The users in this period')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('gray')
                ->iconColor('success'),
        ];
    }
}
