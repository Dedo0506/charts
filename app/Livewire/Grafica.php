<?php

namespace App\Livewire;

use App\Charts\ConsejoChart;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart as FacadesLarapexChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Livewire\Component;

class Grafica extends Component
{
    public function render(ConsejoChart $chart)
    {
        return view('livewire.grafica', ['chart' => $chart->build()]);
    }
}
