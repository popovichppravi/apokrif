<?
$lat="59.939095";
$lon="30.315868";
$url = 'http://api.weather.yandex.ru/v1/forecast?lat='.$lat.'&lon='.$lon.'&lang=ru_RU&limit=1&extra=false';
?>
<?php
$opts = array(
  'http'=>array(
      'method'=>"GET",
      'header'=>"X-Yandex-API-Key: ccb39adf-6679-4498-b93c-a96437040ae2"
));
$context = stream_context_create($opts);
$data = file_get_contents($url, false, $context);
if($data) {
  $array =json_decode($data);
  $icon_name=$array->{'fact'}->{'condition'};
  $temp_now=$array->{'fact'}->{'temp'};
  $temp_evn=$array->{'forecasts'}[0]->{'parts'}->{'day_short'}->{'temp'};
  $temp_night=$array->{'forecasts'}[0]->{'parts'}->{'night_short'}->{'temp'};
};
?>
<div class="top-weather">
<span>Погода:</span><img class="weather-ico" src="images/weather/<?=$icon_name?>.svg" alt="" title=""/><span class="temp-now"><?=$temp_now;?>&deg;</span><span class="day-weather">вечером <?=$temp_evn?>&deg;, ночью <?=$temp_night?>&deg;</span>
</div>
