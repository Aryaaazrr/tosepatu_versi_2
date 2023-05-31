<?php

namespace App\Charts;

use App\Models\Pesanan;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use DateTimeZone;

class berandaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $jakartaTimezone = new DateTimeZone('Asia/Jakarta');
        $dateNow = Carbon::now($jakartaTimezone);

        $today_users = Pesanan::whereDate('created_at', $dateNow->toDateString())->count();
        $yesterday_users = Pesanan::whereDate('created_at', $dateNow->subDays(1))->count();
        $users_2_days_ago = Pesanan::whereDate('created_at', $dateNow->subDays(2))->count();

        $chart = new \ArielMejiaDev\LarapexCharts\LineChart;
        $chart->setTitle('Grafik Pesanan Bulan' . ' ' . $dateNow->format('M'))
            ->setSubtitle($dateNow->format('d M Y'))
            ->addLine('Total Pesanan', [$users_2_days_ago, $yesterday_users, $today_users])
            ->setFontFamily('Poppins')
            ->setMarkers(['#2dd4bf', '#E040FB'], 7, 10)
            ->setColors(['#2dd4bf'])
            ->setLabels(['2 hari yang lalu', 'Kemarin', 'Hari Ini']);

        return $chart;
    }
}
