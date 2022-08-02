<?php
namespace Classes\Date;

class Interval
{
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        if ($date1 < $date2){
            $this->date1 = $date1;
            $this->date2 = $date2;
        } else {
            $this->date1 = $date2;
            $this->date2 = $date1;
        }
    }

    public function toDays()
    {
        $result = 0;
        while ($this->date1 < $this->date2){
            $this->date1->changeDay(1);
            $result++;
        }
        return $result;
    }

    public function toMonths()
    {
        $result = 0;
        while ($this->date1 < $this->date2){
            $this->date1->changeMonth(1);
            $result++;
        }
        return $result;
    }

    public function toYears()
    {
        $result = 0;
        while ($this->date1 < $this->date2){
            $this->date1->changeYear(1);
            $result++;
        }
        return $result;
    }
}
?>