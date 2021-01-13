<?php

class ArrayWorker
{

    protected $array = [];


    function __construct()
    {

        $this->fill();
        $this->reindex();

    }

    protected function fill()
    {

        for ($i = 0; $i < 100; $i++) {

            $this->array[$i] = rand(0, 100);
        }
        return $this->array;
    }

    protected function reindex()
    {

        $arr = $this->array;

        $mini = array_search(min($arr), $arr);
        $maxi = array_search(max($arr), $arr);

        $min = min($arr);
        $max = max($arr);

        $arr[$mini] = $max;
        $arr[$maxi] = $min;

        return $arr;
    }

    public function dump()
    {
        $arr = $this->reindex();

        $max = null;
        $min = null;
        $max_key = null;
        $min_key = null;

        foreach ($arr as $key => $value) {

            if ($value > $max || $max === null) {
                $max = $value;
                $max_key = $key;
            }

            if ($value < $min || $min === null) {
                $min = $value;
                $min_key = $key;
            }
        }
        $sum = $min_key + $max_key;
        return $sum;
    }
}

