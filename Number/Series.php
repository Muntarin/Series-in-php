<?php


namespace App\classes;


class Series
{
    public function createSeries()
    {
        //echo 'In function';
        // $result= '';
        $data = (object)$_POST;
        $result = [];
        if ($data->starting_number < $data->ending_number) {
            for ($i = $data->starting_number; $i <= $data->ending_number; $i++) {
                // echo $i.' ';
                //$result .=$i .' ';
                //return $result; //fast value
                array_push($result, $i);
            }
        }
        else{

                for ($i = $data->starting_number; $i >= $data->ending_number; $i--) {
                    array_push($result, $i);
                }
            }
            return $result; //last value
        }

    }