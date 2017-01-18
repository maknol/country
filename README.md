Little class for converting English country names to Bulgaran or ID (for MariaDB/mysql).
Made to work with 'PHP IMDb.com Grabber' from Fabian Beiner
https://github.com/FabianBeiner/PHP-IMDB-Grabber
Some country like USA presents with two names: USA and United_States.
The ID code and names are the same -> САЩ.

Autor Yavor Donkov @ 21.12.2016

Two Countries are missing becouse there is not movies at all with them.
===================================================================
Малък клас за конвертиране на имената на държавите от англйски

на български и/или в ID (за MariaDB/mysql).

Направено да работи с 'PHP IMDb.com Grabber' от Fabian Beiner

https://github.com/FabianBeiner/PHP-IMDB-Grabber

Някои страни като САЩ присъстват с две имена: USA и United_States.

ИД-то е еднакво и за двете имена -> САЩ.

Автор Явор Донков @ 21.12.2016

Липсват две държави, понеже за тях няма филми.

Работа с класа / Work with the class:

Включете класа / Include the class:

include_once 'classes/darjava.php';

Повикайте функцията / Call the function: 

$getCountry = $oIMDB->getCountry();

$country=parseCountry($getCountry);
