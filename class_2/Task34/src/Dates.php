<?php
namespace App\Dates;

use Carbon\CarbonPeriod;
use Carbon\Carbon;
use Illuminate\Support\Collection;

function buildRange(array $data, string $begin, string $end)
{
    $allDate = CarbonPeriod::create($begin, $end);
    foreach ($allDate as $date) {
        $datesArray[] = $date->format('d.m.Y');
    }
    $dataCollect = collect($data);
    $keyData = $dataCollect->keyBy('date');
    foreach ($datesArray as $date) {
        if (!isset($keyData[$date])) {
            $data[] = ['value' => 0, 'date' => $date];
        }
    }
    usort($data, function ($a, $b) {
        $dateA = Carbon::createFromFormat('d.m.Y', $a['date']);
        $dateB = Carbon::createFromFormat('d.m.Y', $b['date']);

        return $dateA <=> $dateB;
    });

    return $data;
}
