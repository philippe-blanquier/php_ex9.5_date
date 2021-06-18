<?php
    declare(strict_types = 1);
    /*  Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
    */
    // compute the timestamp of '16 mai 2016' (US format: month/day/year, not compliant with the ISO 8601 format YYYY-MM-DD (2021-06-13))
    // https://en.wikipedia.org/wiki/Date_format_by_country
    $startDate= new DateTime('05/16/2016');
    //var_dump($startDate);
    $startTimeStamp= date_timestamp_get($startDate);
    // get the current date and translate it into timestamp
    $currentDate= new DateTime();
    $currentTimeStamp= date_timestamp_get($currentDate);
    // compute the delta in seconds and then in days (1 day is 24 hours of 60 minutes of 60 seconds)
    $elapsedDays= intval(($currentTimeStamp - $startTimeStamp)/(24*60*60));
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 9.5 Date</title>
    </head>
    <body >
        <p>nombre de jours qui sépare la date du jour avec le 16 mai 2016: <?= $elapsedDays ?></p>
    </body>
</html>