<?php
/*
Little class for converting English country names to Bulgaran or ID (for MariaDB/mysql).
Made to work with 'PHP IMDb.com Grabber' from Fabian Beiner
https://github.com/FabianBeiner/PHP-IMDB-Grabber

Some country like USA presents with two names: USA and United_States.
The ID code and names are the same -> САЩ.

Autor Yavor Donkov @ 21.12.2016

2 Country missing becouse there is not movies at all with them.
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
*/
function parseCountry($text){
	
	

    $dbcountry = array(
		' ' => '_',
		'\'' => '|',
        'United_States' => 'САЩ',
		'West_Germany' => 'Западна Германия',
		'USA' => 'САЩ',
        'United_Kingdom' => 'Великобритания',
		'UK' => 'Великобритания',
        'Canada' => 'Канада',
		'Russia' => 'Русия',
		'Italy' => 'Италия',
		'Spain' => 'Испания',
		'Argentina' => 'Аржентина',
		'Brazil' => 'Бразилия',
		'Colombia' => 'Колумбия',
		'Finland' => 'Финландия',
		'Hong_Kong' => 'Хонконг',
		'Iran' => 'Иран',
		'Malaysia' => 'Малайзия',
		'Pakistan' => 'Пакистан',
		'Sweden' => 'Швеция',
		'Australia' => 'Австралия',
		'Bulgaria' => 'България',
		'Costa_Rica' => 'Коста Рика',
		'France' => 'Франция',
		'Hungary' => 'Унгария',
		'Ireland' => 'Ирландия',
		'Mexico' => 'Мексико',
		'Poland' => 'Полша',
		'Singapore' => 'Сингапур',
		'Switzerland' => 'Швейцария',
		'Austria' => 'Австрия',
		'Czech_Republic' => 'Чехия',
		'Germany' => 'Германия',
		'Iceland' => 'Исландия',
		'Netherlands' => 'Нидерландия (Холандия)',
		'Portugal' => 'Португалия',
		'South_Africa' => 'Южноафриканска република',
		'Thailand' => 'Тайланд',
		'Belgium' => 'Белгия',
		'China' => 'Китай',
		'Denmark' => 'Дания',
		'Greece' => 'Гърция',
		'India' => 'Индия',
		'New_Zealand' => 'Нова Зеландия',
		'Romania' => 'Румъния',
		'Czechoslovakia' => 'Чехословакия',
		'Saint_Helena' => 'Света Елена',
		'Saint_Lucia' => 'Света Лучия',
		'Bermuda' => 'Бермудски острови',
		'Afghanistan' => 'Афганистан',
		'Åland_Islands' => 'Оландски острови',
		'Aland_Islands' => 'Оландски острови',
		'Albania' => 'Албания',
		'American_Samoa' => 'Американска Самоа',
		'Andorra' => 'Андора',
		'Angola' => 'Ангола',
		'Anguilla' => 'Ангуила',
		'Antarctica' => 'Антарктида',
		'Antigua_and_Barbuda' => 'Антигуа и Барбуда',
		'Armenia' => 'Армения',
		'Aruba' => 'Аруба',
		'Azerbaijan' => 'Азербайджан',
		'Bahamas' => 'Бахамски острови',
		'Bahrain' => 'Бахрейн',
		'Bangladesh' => 'Бангладеш',
		'Algeria' => 'Алжир',
		'Barbados' => 'Барбадос',
		'Belarus' => 'Беларус',
		'Belize' => 'Белиз',
		'Benin' => 'Бенин',
		'Bermuda' => 'Бермудски острови',
		'Bhutan' => 'Бутан',
		'Bolivia' => 'Боливия',
		'Bosnia_and_Herzegovina' => 'Босна и Херцеговина',
		'Botswana' => 'Ботсвана',
		'Bouvet_Island' => 'Остров Буве',
		'British_Virgin_Islands' => 'Британски Вирджински острови',
		'Brunei_Darussalam' => 'Бруней',
		'Burkina_Faso' => 'Буркина Фасо',
		'Burma' => 'Мианмар',
		'Burundi' => 'Бурунди',
		'Cambodia' => 'Камбоджа',
		'Cameroon' => 'Камерун',
		'Cape_Verde' => 'Кабо Верде',
		'Cayman_Islands' => 'Кайманови острови',
		'Central_African_Republic' => 'Централноафриканска република',
		'Chad' => 'Чад',
		'Chile' => 'Чили',
		'Christmas_Island' => 'Остров Рождество или Коледен остров',
		'Cocos_(Keeling)_Islands' => 'Кокосови острови',
		'Comoros' => 'Коморски острови',
		'Congo' => 'ДР Конго',
		'Cook_Islands' => 'Кук',
		'Côte_d|Ivoire' => 'Кот д`Ивоар',
		'Ivory_Coast' => 'Кот д`Ивоар',
		'Croatia' => 'Хърватия',
		'Cuba' => 'Куба',
		'Cyprus' => 'Кипър',
		'Czechoslovakia' => 'Чехословакия',
		'Democratic_Republic_of_the_Congo' => 'Конго',
		'Djibouti' => 'Джибути',
		'Dominica' => 'Доминика',
		'Dominican_Republic' => 'Доминиканска република',
		'East_Germany' => 'Източна Германия',
		'Ecuador' => 'Еквадор',
		'Egypt' => 'Египет',
		'El_Salvador' => 'Салвадор',
		'Equatorial_Guinea' => 'Екваториална Гвинея',
		'Eritrea' => 'Еритрея',
		'Estonia' => 'Естония',
		'Ethiopia' => 'Етиопия',
		'Falkland_Islands' => 'Фолкландски острови',
		'Faroe_Islands' => 'Фарьорски острови',
		'Federal_Republic_of_Yugoslavia' => 'Югославия',
		'Federated_States_of_Micronesia' => 'Микронезия',
		'Fiji' => 'Фиджи',
		'French_Guiana' => 'Френска Гвиана',
		'French_Polynesia' => 'Френска Полинезия',
		'French_Southern_Territories' => 'Френски южни и антарктически територии',
		'Gabon' => 'Габон',
		'Gambia' => 'Гамбия',
		'Georgia' => 'Грузия',
		'Ghana' => 'Гана',
		'Gibraltar' => 'Гибралтар',
		'Greenland' => 'Гренландия',
		'Grenada' => 'Гренада',
		'Guadeloupe' => 'Гваделупа',
		'Guam' => 'Гуам',
		'Guatemala' => 'Гватемала',
		'Guernsey' => 'Гърнзи',
		'Guinea' => 'Гвинея',
		'Guinea-Bissau' => 'Гвинея-Бисау',
		'Guyana' => 'Гвиана',
		'Haiti' => 'Хаити',
		'Holy_See_(Vatican_City_State)' => 'Ватикана',
		'Honduras' => 'Хондурас',
		'Indonesia' => 'Индонезия',
		'Iraq' => 'Ирак',
		'Isle_of_Man' => 'Ман',
		'Israel' => 'Израел',
		'Jamaica' => 'Ямайка',
		'Jersey' => 'Джърси',
		'Jordan' => 'Йордания',
		'Kazakhstan' => 'Казахстан',
		'Kenya' => 'Кения',
		'Kiribati' => 'Кирибати',
		'Korea' => 'Корея',
		'Kosovo' => 'Косово',
		'Kuwait' => 'Кувейт',
		'Kyrgyzstan' => 'Киргизстан',
		'Laos' => 'Лаос',
		'Latvia' => 'Латвия',
		'Lebanon' => 'Ливан',
		'Lesotho' => 'Лесото',
		'Liberia' => 'Либерия',
		'Libya' => 'Либия',
		'Liechtenstein' => 'Лихтенщайн',
		'Lithuania' => 'Литва',
		'Luxembourg' => 'Люксембург',
		'Macao' => 'Макао',
		'Madagascar' => 'Мадагаскар',
		'Malawi' => 'Малави',
		'Maldives' => 'Малдиви',
		'Mali' => 'Мали',
		'Malta' => 'Малта',
		'Marshall_Islands' => 'Маршалови острови',
		'Martinique' => 'Мартиника',
		'Mauritania' => 'Мавритания',
		'Mauritius' => 'Мавриций',
		'Mayotte' => 'Майот',
		'Moldova' => 'Молдова',
		'Monaco' => 'Монако',
		'Mongolia' => 'Монголия',
		'Montenegro' => 'Черна гора',
		'Montserrat' => 'Монтсерат',
		'Morocco' => 'Мароко',
		'Mozambique' => 'Мозамбик',
		'Myanmar' => 'Мианмар',
		'Namibia' => 'Намибия',
		'Nauru' => 'Науру',
		'Nepal' => 'Непал',
		'Netherlands_Antilles' => 'Нидерландски Антили',
		'New_Caledonia' => 'Нова Каледония',
		'Nicaragua' => 'Никарагуа',
		'Niger' => 'Нигер',
		'Nigeria' => 'Нигерия',
		'Niue' => 'Ниуе',
		'Norfolk_Island' => 'Норфолк',
		'North_Korea' => 'Северна Корея',
		'North_Vietnam' => 'ДР Виетнам',
		'Northern_Mariana_Islands' => 'Северни Мариански острови',
		'Norway' => 'Норвегия',
		'Oman' => 'Оман',
		'Palau' => 'Палау',
		'Palestine' => 'Палестина',
		'Panama' => 'Панама',
		'Papua_New_Guinea' => 'Папуа Нова Гвинея',
		'Paraguay' => 'Парагвай',
		'Peru' => 'Перу',
		'Philippines' => 'Филипини',
		'Pitcairn' => 'Питкерн',
		'Puerto_Rico' => 'Пуерто Рико',
		'Qatar' => 'Катар',
		'Republic_of_Macedonia' => 'Македония',
		'Réunion' => 'Реюнион',
		'Rwanda' => 'Руанда',
		'Saint_Barthélemy' => 'Сен Бартелми',
		'Saint_Kitts_and_Nevis' => 'Сейнт Китс и Невис',
		'Saint_Martin_(French_part)' => 'Сейнт Мартин (Френска част)',
		'Saint_Pierre_and_Miquelon' => 'Сен Пиер и Микелон',
		'Saint_Vincent_and_the_Grenadines' => 'Сейнт Винсент и Гренадини',
		'Samoa' => 'Самоа',
		'San_Marino' => 'Сан Марино',
		'Sao_Tome_and_Principe' => 'Сао Томе и Принсипи',
		'Saudi_Arabia' => 'Саудитска Арабия',
		'Senegal' => 'Сенегал',
		'Serbia_and_Montenegro' => 'Сърбия и Черна гора',
		'Seychelles' => 'Сейшели',
		'Siam' => 'Тайланд',
		'Sierra_Leone' => 'Сиера Леоне',
		'Slovakia' => 'Словакия',
		'Slovenia' => 'Словения',
		'Solomon_Islands' => 'Соломонови острови',
		'Somalia' => 'Сомалия',
		'South_Georgia_and_the_South_Sandwich_Islands' => 'Южна Джорджия и Южни Сандвичеви острови',
		'South_Korea' => 'Южна Корея',
		'Soviet_Union' => 'СССР',
		'USSR' => 'СССР',
		'Sri_Lanka' => 'Шри Ланка',
		'Sudan' => 'Судан',
		'Suriname' => 'Суринам',
		'Svalbard_and_Jan_Mayen' => 'Свалбард и Ян Майен',
		'Swaziland' => 'Свазиленд',
		'Syria' => 'Сирия',
		'Taiwan' => 'Тайван',
		'Tajikistan' => 'Таджикистан',
		'Tanzania' => 'Танзания',
		'Timor-Leste' => 'Източен Тимор',
		'Togo' => 'Того',
		'Tokelau' => 'Токелау',
		'Tonga' => 'Тонга',
		'Trinidad_and_Tobago' => 'Тринидад и Тобаго',
		'Tunisia' => 'Тунис',
		'Turkey' => 'Турция',
		'Turkmenistan' => 'Туркменистан',
		'Turks_and_Caicos_Islands' => 'Търкс и Кайкос',
		'Tuvalu' => 'Тувалу',
		'U.S._Virgin_Islands' => 'Американски Вирджински острови',
		'Uganda' => 'Уганда',
		'Ukraine' => 'Украйна',
		'United_Arab_Emirates' => 'Обединени арабски емирства',
		'United_States_Minor_Outlying_Islands' => 'Малки далечни острови на САЩ',
		'Uruguay' => 'Уругвай',
		'Uzbekistan' => 'Узбекистан',
		'Vanuatu' => 'Вануату',
		'Venezuela' => 'Венецуела',
		'Vietnam' => 'Виетнам',
		'Wallis_and_Futuna' => 'Уолис и Футуна',
		'Western_Sahara' => 'Западна Сахара',
		'Yemen' => 'Йемен',
		'Yugoslavia' => 'Югославия',
		'Zaire' => 'Заир (Конго)',
		'Zambia' => 'Замбия',
		'Zimbabwe' => 'Зимбабве',
		'_' => ' '
    );

    // Now you need find and replace
    foreach($dbcountry as $cntry => $ccod){
        $text = str_replace(    
            $cntry,
            $ccod,
            $text
        );
    }

    // Now only return it
    return $text;
}

function Country2id($text){
	
	

    $dbcountry = array(
		' ' => '_',
		'\'' => '|',
        'United_States' => 'c001',
		'West_Germany' => 'c002',
		'USA' => 'c001',
        'United_Kingdom' => 'c004',
		'UK' => 'c004',
        'Canada' => 'c006',
		'Russia' => 'c007',
		'Italy' => 'c008',
		'Spain' => 'c009',
		'Argentina' => 'c010',
		'Brazil' => 'c011',
		'Colombia' => 'c012',
		'Finland' => 'c013',
		'Hong_Kong' => 'c014',
		'Iran' => 'c015',
		'Malaysia' => 'c016',
		'Pakistan' => 'c017',
		'Sweden' => 'c018',
		'Australia' => 'c019',
		'Bulgaria' => 'c020',
		'Costa_Rica' => 'c021',
		'France' => 'c022',
		'Hungary' => 'c023',
		'Ireland' => 'c024',
		'Mexico' => 'c025',
		'Poland' => 'c026',
		'Singapore' => 'c027',
		'Switzerland' => 'c028',
		'Austria' => 'c029',
		'Czech_Republic' => 'c030',
		'Germany' => 'c031',
		'Iceland' => 'c032',
		'Netherlands' => 'c033',
		'Portugal' => 'c034',
		'South_Africa' => 'c035',
		'Thailand' => 'c036',
		'Belgium' => 'c037',
		'China' => 'c038',
		'Denmark' => 'c039',
		'Greece' => 'c040',
		'India' => 'c041',
		'New_Zealand' => 'c043',
		'Romania' => 'c044',
		'Czechoslovakia' => 'c045',
		'Saint_Helena' => 'c046',
		'Saint_Lucia' => 'c047',
		'Bermuda' => 'c048',
		'Afghanistan' => 'c049',
		'Åland_Islands' => 'c050',
		'Aland_Islands' => 'c050',
		'Albania' => 'c052',
		'American_Samoa' => 'c053',
		'Andorra' => 'c054',
		'Angola' => 'c055',
		'Anguilla' => 'c056',
		'Antarctica' => 'c057',
		'Antigua_and_Barbuda' => 'c058',
		'Armenia' => 'c059',
		'Aruba' => 'c060',
		'Azerbaijan' => 'c061',
		'Bahamas' => 'c062',
		'Bahrain' => 'c063',
		'Bangladesh' => 'c064',
		'Algeria' => 'c065',
		'Barbados' => 'c066',
		'Belarus' => 'c067',
		'Belize' => 'c068',
		'Benin' => 'c069',
		'Bermuda' => 'c048',
		'Bhutan' => 'c071',
		'Bolivia' => 'c072',
		'Bosnia_and_Herzegovina' => 'c073',
		'Botswana' => 'c074',
		'Bouvet_Island' => 'c075',
		'British_Virgin_Islands' => 'c076',
		'Brunei_Darussalam' => 'c077',
		'Burkina_Faso' => 'c078',
		'Burma' => 'c079',
		'Burundi' => 'c080',
		'Cambodia' => 'c081',
		'Cameroon' => 'c082',
		'Cape_Verde' => 'c083',
		'Cayman_Islands' => 'c084',
		'Central_African_Republic' => 'c085',
		'Chad' => 'c086',
		'Chile' => 'c087',
		'Christmas_Island' => 'c088',
		'Cocos_(Keeling)_Islands' => 'c089',
		'Comoros' => 'c090',
		'Congo' => 'c091',
		'Cook_Islands' => 'c092',
		'Côte_d|Ivoire' => 'c093',
		'Ivory_Coast' => 'c093',
		'Croatia' => 'c095',
		'Cuba' => 'c096',
		'Cyprus' => 'c097',
		'Czechoslovakia' => 'c045',
		'Democratic_Republic_of_the_Congo' => 'c091',
		'Djibouti' => 'c100',
		'Dominica' => 'c101',
		'Dominican_Republic' => 'c102',
		'East_Germany' => 'c103',
		'Ecuador' => 'c104',
		'Egypt' => 'c105',
		'El_Salvador' => 'c106',
		'Equatorial_Guinea' => 'c107',
		'Eritrea' => 'c108',
		'Estonia' => 'c109',
		'Ethiopia' => 'c110',
		'Falkland_Islands' => 'c111',
		'Faroe_Islands' => 'c112',
		'Federal_Republic_of_Yugoslavia' => 'c113',
		'Federated_States_of_Micronesia' => 'c114',
		'Fiji' => 'c115',
		'French_Guiana' => 'c116',
		'French_Polynesia' => 'c117',
		'French_Southern_Territories' => 'c118',
		'Gabon' => 'c119',
		'Gambia' => 'c120',
		'Georgia' => 'c121',
		'Ghana' => 'c122',
		'Gibraltar' => 'c123',
		'Greenland' => 'c124',
		'Grenada' => 'c125',
		'Guadeloupe' => 'c126',
		'Guam' => 'c127',
		'Guatemala' => 'c128',
		'Guernsey' => 'c129',
		'Guinea' => 'c130',
		'Guinea-Bissau' => 'c131',
		'Guyana' => 'c132',
		'Haiti' => 'c133',
		'Holy_See_(Vatican_City_State)' => 'c134',
		'Honduras' => 'c135',
		'Indonesia' => 'c136',
		'Iraq' => 'c137',
		'Isle_of_Man' => 'c138',
		'Israel' => 'c139',
		'Jamaica' => 'c140',
		'Jersey' => 'c141',
		'Jordan' => 'c142',
		'Kazakhstan' => 'c143',
		'Kenya' => 'c144',
		'Kiribati' => 'c145',
		'Korea' => 'c146',
		'Kosovo' => 'c147',
		'Kuwait' => 'c148',
		'Kyrgyzstan' => 'c149',
		'Laos' => 'c150',
		'Latvia' => 'c151',
		'Lebanon' => 'c152',
		'Lesotho' => 'c153',
		'Liberia' => 'c154',
		'Libya' => 'c155',
		'Liechtenstein' => 'c156',
		'Lithuania' => 'c157',
		'Luxembourg' => 'c158',
		'Macao' => 'c159',
		'Madagascar' => 'c160',
		'Malawi' => 'c161',
		'Maldives' => 'c162',
		'Mali' => 'c163',
		'Malta' => 'c164',
		'Marshall_Islands' => 'c165',
		'Martinique' => 'c166',
		'Mauritania' => 'c167',
		'Mauritius' => 'c168',
		'Mayotte' => 'c169',
		'Moldova' => 'c170',
		'Monaco' => 'c171',
		'Mongolia' => 'c172',
		'Montenegro' => 'c173',
		'Montserrat' => 'c174',
		'Morocco' => 'c175',
		'Mozambique' => 'c176',
		'Myanmar' => 'c177',
		'Namibia' => 'c178',
		'Nauru' => 'c179',
		'Nepal' => 'c180',
		'Netherlands_Antilles' => 'c181',
		'New_Caledonia' => 'c182',
		'Nicaragua' => 'c183',
		'Niger' => 'c184',
		'Nigeria' => 'c185',
		'Niue' => 'c186',
		'Norfolk_Island' => 'c187',
		'North_Korea' => 'c188',
		'North_Vietnam' => 'c189',
		'Northern_Mariana_Islands' => 'c190',
		'Norway' => 'c191',
		'Oman' => 'c192',
		'Palau' => 'c193',
		'Palestine' => 'c194',
		'Panama' => 'c195',
		'Papua_New_Guinea' => 'c196',
		'Paraguay' => 'c197',
		'Peru' => 'c198',
		'Philippines' => 'c199',
		'Pitcairn' => 'c200',
		'Puerto_Rico' => 'c201',
		'Qatar' => 'c202',
		'Republic_of_Macedonia' => 'c203',
		'Réunion' => 'c204',
		'Reunion' => 'c204',
		'Rwanda' => 'c205',
		'Saint_Barthélemy' => 'c206',
		'Saint_Barthelemy' => 'c206',
		'Saint_Kitts_and_Nevis' => 'c207',
		'Saint_Martin_(French_part)' => 'c208',
		'Saint_Pierre_and_Miquelon' => 'c209',
		'Saint_Vincent_and_the_Grenadines' => 'c210',
		'Samoa' => 'c211',
		'San_Marino' => 'c212',
		'Sao_Tome_and_Principe' => 'c213',
		'Saudi_Arabia' => 'c214',
		'Senegal' => 'c215',
		'Serbia_and_Montenegro' => 'c216',
		'Seychelles' => 'c217',
		'Siam' => 'c218',
		'Sierra_Leone' => 'c219',
		'Slovakia' => 'c220',
		'Slovenia' => 'c221',
		'Solomon_Islands' => 'c222',
		'Somalia' => 'c223',
		'South_Georgia_and_the_South_Sandwich_Islands' => 'c224',
		'South_Korea' => 'c225',
		'Soviet_Union' => 'c226',
		'USSR' => 'c226',
		'Sri_Lanka' => 'c228',
		'Sudan' => 'c229',
		'Suriname' => 'c230',
		'Svalbard_and_Jan_Mayen' => 'c231',
		'Swaziland' => 'c232',
		'Syria' => 'c233',
		'Taiwan' => 'c234',
		'Tajikistan' => 'c235',
		'Tanzania' => 'c236',
		'Timor-Leste' => 'c237',
		'Togo' => 'c238',
		'Tokelau' => 'c239',
		'Tonga' => 'c240',
		'Trinidad_and_Tobago' => 'c241',
		'Tunisia' => 'c242',
		'Turkey' => 'c243',
		'Turkmenistan' => 'c244',
		'Turks_and_Caicos_Islands' => 'c245',
		'Tuvalu' => 'c246',
		'U.S._Virgin_Islands' => 'c247',
		'Uganda' => 'c248',
		'Ukraine' => 'c249',
		'United_Arab_Emirates' => 'c250',
		'United_States_Minor_Outlying_Islands' => 'c251',
		'Uruguay' => 'c252',
		'Uzbekistan' => 'c253',
		'Vanuatu' => 'c254',
		'Venezuela' => 'c255',
		'Vietnam' => 'c189',
		'Wallis_and_Futuna' => 'c257',
		'Western_Sahara' => 'c258',
		'Yemen' => 'c259',
		'Yugoslavia' => 'c113',
		'Zaire' => 'c227',
		'Zambia' => 'c005',
		'Zimbabwe' => 'c003',
		'_' => ' '
    );

    // Now you need find and replace
    foreach($dbcountry as $cntry => $ccod){
        $text = str_replace(    
            $cntry,
            $ccod,
            $text
        );
    }

    // Now only return it
    return $text;
}
?>
