<?php

namespace App\Charts;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ConsejoChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $this->chart = new LarapexChart();
        
        // Creamos el gráfico
        return $this->chart->horizontalBarChart()
            ->setTitle('Los Angeles vs Miami.')
            ->setSubtitle('Wins during season 2021.')
            ->setColors(['#FFC107', '#D32F2F'])
            ->addData('San Francisco', [3, 3, 3, 3])
            ->setXAxis(['January', 'February', 'March', 'April'])
            ->setFontFamily('Helvelica');
        
    }
}
