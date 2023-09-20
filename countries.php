<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
        <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            text-align: center;
        }

        p {
            font-size: 18px;
        }

        div {
            margin: 0 auto;
            background-color: #F5F5F5;
            max-width: 600px;
            padding: 5px 20px 20px 20px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        div:hover {
            background-color: #fff;
            border: 1px solid lightgrey;
        }
    </style>
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

function try_walk($val, $key, $data)
{
    echo "\t<p lang=\"en\">$data{$val['name']} ({$val['capital']}): {$val['area']}, population - ";
    print_r($val['population']);
    echo "</p>\n";
}

function cmp_capital($a, $b)
{
    return $a["capital"] <=> $b["capital"];
}
uasort($countries, "cmp_capital");
echo "\n\t<div><h2>uasort()[capital]:</h2>\n";
array_walk($countries, "try_walk", "Country - ");
echo "</div>";

function cmp_area($a, $b)
{
    return $b["area"] <=> $a["area"];
}
uasort($countries, "cmp_area");
echo "\n\t<div><h2>uasort()[area]:</h2>\n";
array_walk($countries, "try_walk", "Country - ");
echo "</div>";

function cmp_name($a, $b)
{
    return $a["name"] <=> $b["name"];
}
uasort($countries, "cmp_name");
echo "\n\t<div><h2>uasort()[name]:</h2>\n";
array_walk($countries, "try_walk", "Country - ");
echo "</div>";

function cmp_population($a, $b)
{
    return array_sum($a['population']) / count($a['population']) <=> array_sum($b['population']) / count($b['population']);
}
uasort($countries, "cmp_population");
echo "\n\t<div><h2>uasort()[population]:</h2>\n";
array_walk($countries, "try_walk", "Country - ");
echo "</div>";
?>
</body>
</html>