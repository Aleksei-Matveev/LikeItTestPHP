<?php

class Rainbow
{
    private static array $colors;
    private static int $countColors;

    /**
     *
     */
    private static function fillColors()
    {
        $row = 0;
        $colors = [];
        $names = ['NAME', 'HTML', 'R', 'G', 'B'];
        if (($handle = fopen("vendor/colors.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 100, ";")) !== FALSE) {
                $num = count($data);
                for ($i = 0; $i < $num; $i++) {
                    $colors[$row][$names[$i]] = $data[$i];
                }
                $row++;
            }
            fclose($handle);
        }
        self::$countColors = $row - 1;
        self::$colors =  $colors;
    }

    private static function getRandItem():int
    {
        return rand(0, self::$countColors);
    }

    public static function getColors(): array
    {
        self::fillColors();
        $response = [];
        for ($i = 0; $i < 9; $i++) {
            $response[$i] = self::$colors[self::getRandItem()];
        }
        return  $response;
    }
}