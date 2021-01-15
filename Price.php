<?php
class Price
{
    static function cost($a, $b)
    {
        $url = "https://economia.awesomeapi.com.br/$a";
        $obj = json_decode(file_get_contents($url), true);

        foreach ($obj as $values) {
            foreach ($values as $key => $value) {
                $data[$key] = $value;
            }
        }
        $data['high'] *= $b;
        $data['low'] *= $b;
        $data['bid'] *= $b;
        $data['ask'] *= $b;
        $array = explode(' ', $data['create_date']);
        $array2 = explode('-', $array[0]);

        return [
            number_format($data['high'], 2, ',', ''),
            number_format($data['low'], 2, ',', ''),
            number_format($data['varBid'], 2, ',', ''),
            number_format($data['pctChange'], 2, ',', ''),
            number_format($data['bid'], 2, ',', ''),
            number_format($data['ask'], 2, ',', ''),
            "$array2[2]/$array2[1]/$array2[0] $array[1]"
        ];
    }
}
