<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potentially Helpful Practice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background-color: #000;
            /* Set the background color */
            font-family: 'Arial', sans-serif;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            gap: 1em;
            padding: 0 5em;
        }

        h1 {
            font-size: 5em;
        }

        h1::first-letter {
            color: #220088;
            font-size: 2em;
        }

        h1:nth-of-type(2) {
            padding-left: 2em;
        }

        h1:nth-of-type(3) {
            padding-left: 4em;
        }

        h2 {
            font-style: italic;
        }
    </style>
</head>

<body>
    <?php
    class c
    {
        public static function config()
        {
            return (object) [
                'timezone' => 'America/New_York' // Example timezone
            ];
        }
    }
    $c = new c;
    $startDate = new DateTime("2024-11-22 17:30:00", new DateTimeZone(c::config()->timezone));
    $currentDate = new DateTime("now", new DateTimeZone(c::config()->timezone));
    $timeTaken = $startDate->diff($currentDate);

    $startDateString = $startDate->format('l dS \o\f F\, Y \a\t H:i');

    $timeComponents = [];
    if ($timeTaken->y > 0)
        $timeComponents[] = $timeTaken->y . ' years';
    if ($timeTaken->m > 0)
        $timeComponents[] = $timeTaken->m . ' months';
    if ($timeTaken->d > 0)
        $timeComponents[] = $timeTaken->d . ' days';
    if ($timeTaken->h > 0)
        $timeComponents[] = $timeTaken->h . ' hours';
    if ($timeTaken->i > 0)
        $timeComponents[] = $timeTaken->i . ' minutes';

    $timeTakenString = implode(', ', $timeComponents);

    echo "<h2>Welcome to</h2>";
    echo "<h1>Potentially</h1>";
    echo "<h1>Helpful</h1>";
    echo "<h1>Practice</h1>";
    echo "<h2>Follow one Javascript dev's journey into the elephantastisch world of php</h2>";
    echo "<p>This odyssey began on $startDateString and has lasted $timeTakenString</p>"
        ?>

</body>

</html>