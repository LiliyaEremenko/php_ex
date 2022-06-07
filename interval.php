<?php
require_once 'date.php';

class Interval {
    public function __construct(Date $date1, Date $date2) {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function toDays() {
        $dateO = date_create($this->date1);
        $dateT = date_create($this->date2);
        return date_diff($dateO, $dateT)->format('%a дней');
    }

    public function toMonths() {
        $dateO = date_create($this->date1);
        $dateT = date_create($this->date2);
        return date_diff($dateO, $dateT)->format('%m месяцев');
    }

    public function toYears() {
        $dateO = date_create($this->date1);
        $dateT = date_create($this->date2);
        return date_diff($dateO, $dateT)->format('%y лет');
    }

    public function __toString() {
        $this->dateArray = ['years' => $this->toYears(),
            'months' => $this->toMonths(),
            'days' => $this->toDays()
        ];
        return var_dump($this->dateArray);
    }
}
?>