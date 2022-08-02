<?php
namespace Classes\Date;

class Date
	{
        private $date;

		public function __construct($date = null)
		{
            if ($date === null){
                $this->date = date('Y-m-d');
            } else {
                if (strtotime($date)){
                    $this->date = date('Y-m-d', strtotime($date));
                }
            }
		}
		
		public function getDay()
		{
			return date('d', strtotime($this->date));
		}
		
		public function getMonth($lang = null)
		{
            $month = date('m', strtotime($this->date));
            if ($lang == 'en'){
                switch ($month){
                    case 1:
                        $result = 'January';
                    break;
                    case 2:
                        $result = 'February';
                    break;
                    case 3:
                        $result = 'March';
                    break;
                    case 4:
                        $result = 'April';
                        break;
                    case 5:
                        $result = 'May';
                        break;
                    case 6:
                        $result = 'June';
                        break;
                    case 7:
                        $result = 'July';
                        break;
                    case 8:
                        $result = 'August';
                        break;
                    case 9:
                        $result = 'September';
                        break;
                    case 10:
                        $result = 'October';
                        break;
                    case 11:
                        $result = 'November';
                        break;
                    case 12:
                        $result = 'December';
                        break;
                    default:
                    break;
                }
            } else {
                switch ($month) {
                    case 1:
                        $result = 'Январь';
                        break;
                    case 2:
                        $result = 'Февраль';
                        break;
                    case 3:
                        $result = 'Март';
                        break;
                    case 4:
                        $result = 'Апрель';
                        break;
                    case 5:
                        $result = 'Май';
                        break;
                    case 6:
                        $result = 'Июнь';
                        break;
                    case 7:
                        $result = 'Июль';
                        break;
                    case 8:
                        $result = 'Август';
                        break;
                    case 9:
                        $result = 'Сентябрь';
                        break;
                    case 10:
                        $result = 'Октябрь';
                        break;
                    case 11:
                        $result = 'Ноябрь';
                        break;
                    case 12:
                        $result = 'Декабрь';
                        break;
                    default:
                    break;
                }
            }
            return $result;
		}
		
		public function getYear()
		{
            return date('Y', strtotime($this->date));
		}
		
		public function getWeekDay($lang = null)
		{
            $weekDay = date('w', strtotime($this->date));
            if ($lang == 'en'){
                switch ($weekDay){
                    case 0:
                        $result = 'Sunday';
                        break;
                    case 1:
                        $result = 'Monday';
                        break;
                    case 2:
                        $result = 'Tuesday';
                        break;
                    case 3:
                        $result = 'Wednesday';
                        break;
                    case 4:
                        $result = 'Thursday';
                        break;
                    case 5:
                        $result = 'Friday';
                        break;
                    case 6:
                        $result = 'Saturday';
                        break;
                    default:
                        break;
                }
            } else {
                switch ($weekDay) {
                    case 0:
                        $result = 'Воскресенье';
                        break;
                    case 1:
                        $result = 'Понедельник';
                        break;
                    case 2:
                        $result = 'Вторник';
                        break;
                    case 3:
                        $result = 'Среда';
                        break;
                    case 4:
                        $result = 'Четверг';
                        break;
                    case 5:
                        $result = 'Пятница';
                        break;
                    case 6:
                        $result = 'Суббота';
                        break;
                    default:
                        break;
                }
            }
            return $result;
		}
		public function changeDay($value)
		{
            $date = date_create($this->date);
            date_modify($date , $value . ' day');
            $this->date = date_format($date, 'Y-m-d');
            return $this;
		}
		
		public function changeMonth($value)
		{
            $date = date_create($this->date);
            date_modify($date , $value . ' month');
            $this->date = date_format($date, 'Y-m-d');
            return $this;
		}
		
		public function changeYear($value)
		{
            $date = date_create($this->date);
            date_modify($date , $value . ' year');
            $this->date = date_format($date, 'Y-m-d');
            return $this;
		}
		
		public function format($format)
		{
            $date = date_create($this->date);
			return date_format($date, $format);
		}
		
		public function __toString()
		{
			return $this->date;
		}
	}
?>