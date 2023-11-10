<?php 
namespace App;
use Carbon\Carbon;

class Booking{
    private array $dataBooking = [];
    
    public function book(string $startDate, string $endDate):bool{
        $startDate = new Carbon($startDate);
        $endDate = new Carbon($endDate);
        if ($endDate->lessThanOrEqualTo($startDate)) {
            return false;
        }

        foreach ($this->dataBooking as $booking) {
            $bookingStart = new Carbon($booking["startDate"]);
            $bookingEnd = new Carbon($booking["endDate"]);
            if ($endDate->betweenExcluded($bookingStart, $bookingEnd) || $startDate->betweenExcluded($bookingStart, $bookingEnd)
             || $bookingStart->betweenExcluded($startDate, $endDate) || $bookingEnd->betweenExcluded($startDate, $endDate) ||
             $startDate->equalTo($bookingStart) ||
             $endDate->equalTo($bookingEnd)) {
                return false;
            }
        }

        $this->dataBooking[] = ['startDate' => $startDate, 'endDate' => $endDate];
        return true;
    }
}