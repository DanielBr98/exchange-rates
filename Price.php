<?php
class Price
{
    static function cost(string $pair, float $amount): ?array
    {
        $url = "https://economia.awesomeapi.com.br/json/last/" . urlencode($pair);

        $json = @file_get_contents($url);
        if ($json === false) {
            return null;
        }

        $obj = json_decode($json, true);
        if (!is_array($obj) || empty($obj)) {
            return null;
        }

        $data = reset($obj);
        $required = ['high', 'low', 'bid', 'ask', 'varBid', 'pctChange', 'create_date'];
        foreach ($required as $key) {
            if (!isset($data[$key])) {
                return null;
            }
        }

        $date = DateTime::createFromFormat('Y-m-d H:i:s', $data['create_date']);
        $formattedDate = $date ? $date->format('d/m/Y H:i:s') : $data['create_date'];

        return [
            number_format($data['high'] * $amount, 2, ',', ''),
            number_format($data['low'] * $amount, 2, ',', ''),
            number_format($data['varBid'], 2, ',', ''),
            number_format($data['pctChange'], 2, ',', ''),
            number_format($data['bid'] * $amount, 2, ',', ''),
            number_format($data['ask'] * $amount, 2, ',', ''),
            $formattedDate,
        ];
    }
}
