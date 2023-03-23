<?php

/**
 * @param $month = le mois compris entre 1 et 12
 * @param $year = l'année 
 * @throws Exception
 */
class Month
{

    private $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    private $month;
    private $year;

    public function __construct(?int $month = null, ?int $year = null)
    {
        if ($month === null) {
            $month = intVal(date('m'));
        }
        if ($year === null) {
            $year = intVal(date('Y'));
        }
        if ($month < 1 || $month > 12) {
            throw new Exception("Le mois $month est incorrecte");
        }
        if ($year < 2022) {
            throw new Exception("Désolé cette année est déja écoulée");
        }
        $this->month = $month;
        $this->year = $year;
    }

    public function toString()
    {
        return $this->months[$this->month - 1] . " " . $this->year;
    }

    public function getWeeks()
    {
        $start = new \DateTime("{$this->year}-{$this->month}-01");
        $end = (clone $start)->modify("+1 month -1 day");
        $weeks = intval($end->format("W")) - intval($start->format("W")) + 1;
        if ($weeks < 0) {
            $weeks = intval($end->format("W"));
        }
        return $weeks;
    }
}
