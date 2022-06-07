<?php
class Date {
    public function __construct($date = null) {
        $this->date = $date;
        if ($date == null) {
            $this->date = date('d-m-Y');
        }
    }

    public function getDay() {
        return date('d', strtotime($this->date));
    }

    public function getMonth($lang = null) {
        if ($lang == 'en') {
            $engMonthNames = [ 1 =>
                'january',
                'february',
                'march',
                'april',
                'may',
                'june',
                'july',
                'august',
                'september',
                'october',
                'november',
                'december'
            ];
            return $engMonthNames[date('n', strtotime($this->date))];
        }
        elseif ($lang == 'ru') {
            $ruMonthNames = [ 1 =>
                'январь',
                'февраль',
                'март',
                'апрель',
                'май',
                'июнь',
                'июль',
                'август',
                'сентябрь',
                'октябрь',
                'ноябрь',
                'декабрь'
            ];
            return $ruMonthNames[date('n', strtotime($this->date))];
        }
        else {
            return date('m', strtotime($this->date));
        }
    }

    public function getYear() {
        return date('Y', strtotime($this->date));
    }

    public function getWeekDay($lang = null) {
        if ($lang == 'en') {
            $engDayNames = [
                'sunday',
                'monday',
                'tuesday',
                'wednesday',
                'thursday',
                'friday',
                'saturday'
            ];
            return $engDayNames[date('w', strtotime($this->date))];
        }
        elseif ($lang == 'ru') {
            $ruDayNames = [
                'воскресенье',
                'понедельник',
                'вторник',
                'среда',
                'четверг',
                'пятница',
                'суббота',
            ];
            return $ruDayNames[date('w', strtotime($this->date))];
        }
        else {
            return date('w', strtotime($this->date));
        }
    }

    public function addDay($value) {
        $dateMod = date_create($this->date);
        date_modify($dateMod, "+$value days");
        return date_format($dateMod, 'd-m-Y');
    }

    public function subDay($value) {
        $dateMod = date_create($this->date);
        date_modify($dateMod, "-$value days");
        return date_format($dateMod, 'd-m-Y');
    }

    public function addMonth($value) {
        $dateMod = date_create($this->date);
        date_modify($dateMod, "+$value month");
        return date_format($dateMod, 'd-m-Y');
    }

    public function subMonth($value) {
        $dateMod = date_create($this->date);
        date_modify($dateMod, "-$value month");
        return date_format($dateMod, 'd-m-Y');
    }

    public function addYear($value) {
        $dateMod = date_create($this->date);
        date_modify($dateMod, "+$value year");
        return date_format($dateMod, 'd-m-Y');
    }

    public function subYear($value) {
        $dateMod = date_create($this->date);
        date_modify($dateMod, "-$value year");
        return date_format($dateMod, 'd-m-Y');
    }

    public function format($format) {
        return date($format, strtotime($this->date));
    }

    public function __toString() {
        return $this->date;
    }
}
?>