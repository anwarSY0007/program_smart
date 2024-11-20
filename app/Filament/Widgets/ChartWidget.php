<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget as WidgetsChartWidget;

// use App\Models\Pasien;
use App\Models\{Variabel};
// use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
// use Filament\Widgets\ChartWidget;

class ChartWidget extends WidgetsChartWidget
{
    protected static ?string $heading = 'Data Variabel';
    protected static string $color = 'warning';
    protected static ?string $maxweight = '1080px';
    protected static bool $isLazy = true;
    public function getDescription(): ?string
    {
        return 'The number of variabel published per month.';
    }

    protected function getData(): array
    {
        $data = Trend::model(Variabel::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Data Variabel',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
