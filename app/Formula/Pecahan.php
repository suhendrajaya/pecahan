<?php

namespace App\Formula;

class Pecahan
{
    public static function doGet($money)
    {
        $rs = [];

        if ($money >= 100000) {

            $nilai_uang = floor(($money / 100000));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "100.000");

            $money = $money % 100000;
        }

        if ($money >= 50000 && $money < 100000) {
            
            $nilai_uang = floor(($money / 50000));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "50.000");

            $money = $money % 50000;
        }

        if ($money >= 20000 && $money < 500000) {

            $nilai_uang = floor(($money / 20000));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "20.000");

            $money = $money % 20000;
        }

        if ($money >= 10000 && $money < 200000) {

            $nilai_uang = floor(($money / 10000));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "10.000");

            $money = $money % 10000;
        }


        if ($money >= 5000 && $money < 100000) {

            $nilai_uang = floor(($money / 5000));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "5.000");

            $money = $money % 5000;
        }

        if ($money >= 2000 && $money < 5000) {
            
            $nilai_uang = floor(($money / 2000));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "2.000");

            $money = $money % 2000;
        }

        if ($money >= 1000 && $money < 2000) {

            $nilai_uang = floor(($money / 1000));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "1.000");

            $money = $money % 1000;
        }



        if ($money >= 500 && $money < 1000) {
            
            $nilai_uang = floor(($money / 500));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "500");

            $money = $money % 500;
        }

        if ($money >= 200 && $money < 500) {
            
            $nilai_uang = floor(($money / 200));
            
            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "200");

            $money = $money % 200;
        }


        if ($money >= 100 && $money < 200) {
            
            $nilai_uang = floor(($money / 100));

            $rs[] = array("jumlah" => $nilai_uang, "pecahan" => "100");

            $money = $money % 100;
        }
        
        return $rs;
    }

}
