<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
</head>
<body>
    <h1>Countries</h1>
    <?php
$countries = [["name" => "France",
    "capital" => "Paris",
    "area" => 640679,
    "population" => [
        "2000" => 59278000,
        "2010" => 59278000,
    ],
],
    [
        "name" => "England",
        "capital" => "London",
        "area" => 130395,
        "population" => [
            "2000" => 58800000,
            "2010" => 63200000,
        ],
    ],
    [
        "name" => "Deutschland",
        "capital" => "Berlin",
        "area" => 357021,
        "population" => [
            "2000" => 82260000,
            "2010" => 81752000,
        ],
    ],
];

function cmp_capital($a, $b)
{
    return $a["capital"] <=> $b["capital"];
}
uasort($countries, "cmp_capital");
echo "\n\t<h2>uasort()[capital]:</h2>\n";
print_r($countries);

function cmp_area($a, $b)
{
    return $a["area"] <=> $b["area"];
}
uasort($countries, "cmp_area");
echo "\n\t<h2>uasort()[area]:</h2>\n";
print_r($countries);

function cmp_name($a, $b)
{
    return $a["name"] <=> $b["name"];
}
uasort($countries, "cmp_name");
echo "\n\t<h2>uasort()[name]:</h2>\n";
print_r($countries);

function cmp_population($a, $b) {
    return array_sum($a['population']) / count($a['population']) <=> array_sum($b['population']) / count($b['population']);
}
uasort($countries, "cmp_population");
echo "\n\t<h2>uasort()[population]:</h2>\n";
print_r($countries);
?>
</body>
</html>