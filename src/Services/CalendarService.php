<?php


namespace Lara\Calendar\Services;


use Carbon\Carbon;
use Lara\Calendar\Services\Calendar\CalendarInterface;

class CalendarService
{

    private $calendar;

    public function __construct(CalendarInterface $calendar)
    {
        $this->calendar = $calendar;
    }

    public function generateCalendar($date, $dates=[])
    {
        return $this->calendar->generateCalendar($date, $dates=[]);
    }


}
