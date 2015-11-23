<?php 

	$months = [
		1 => ["Jan","January","يناير"],
		2 => ["Feb","February","فيبراير"],
		3 => ["Mar","March","مارس"],
		4 => ["Apr","April","إبريل"],
		5 => ["May","May","مايو"],
		6 => ["Jun","June","يونيو"],
		7 => ["Jul","July","يوليو"],
		8 => ["Aug","August","أغسطس"],
		9 => ["Sep","September","سبتمبر"],
		10 => ["Oct","October","أكتوبر"],
		11 => ["Nov","November","نوفمبر"],
		12 => ["Dec","December","ديسمبير"],
	];

	$hours = [
		0=>"00-am",
		1=>"01-am",
		2=>"02-am",
		3=>"03-am",
		4=>"04-am",
		5=>"05-am",
		6=>"06-am",
		7=>"07-am",
		8=>"08-am",
		9=>"09-am",
		10=>"10-am",
		11=>"11-am",
		12=>"12-pm",
		13=>"13-pm",
		14=>"14-pm",
		15=>"15-pm",
		16=>"16-pm",
		17=>"17-pm",
		18=>"18-pm",
		19=>"19-pm",
		20=>"20-pm",
		21=>"21-pm",
		22=>"22-pm",
		23=>"23-pm",
	];




	$time_zones = [
		"Africa"=>[
"Abidjan","Accra","Addis_Ababa","Algiers","Asmara","Asmera","Bamako","Bangui","Banjul","Bissau","Blantyre",
"Brazzaville","Bujumbura","Cairo","Casablanca","Ceuta","Conakry","Dakar","Dar_es_Salaam","Djibouti","Douala","El_Aaiun",
"Freetown","Gaborone","Harare","Johannesburg","Juba","Kampala","Khartoum","Kigali","Kinshasa","Lagos",
"Libreville","Lome","Luanda","Lubumbashi","Lusaka","Malabo","Maputo","Maseru","Mbabane","Mogadishu","Monrovia",
"Nairobi","Ndjamena","Niamey","Nouakchott","Ouagadougou","Porto-Novo","Sao_Tome","Timbuktu","Tripoli","Tunis","Windhoek",
		],
		"America"=>[
'Adak','Anchorage','Anguilla','Antigua','Araguaina','Argentina/Buenos_Aires','Argentina/Catamarca',
'Argentina/ComodRivadavia','Argentina/Cordoba','Argentina/Jujuy','Argentina/La_Rioja','Argentina/Mendoza',
'Argentina/Rio_Gallegos','Argentina/Salta','Argentina/San_Juan','Argentina/San_Luis','Argentina/Tucuman',
'Argentina/Ushuaia','Aruba','Asuncion','Atikokan','Atka','Bahia','Bahia_Banderas','Barbados','Belem','Belize','Blanc-Sablon',
'Boa_Vista','Bogota','Boise','Buenos_Aires','Cambridge_Bay','Campo_Grande','Cancun','Caracas','Catamarca','Cayenne',
'Cayman','Chicago','Chihuahua','Coral_Harbour','Cordoba','Costa_Rica','Creston','Cuiaba','Curacao','Danmarkshavn',
'Dawson','Dawson_Creek','Denver','Detroit','Dominica','Edmonton','Eirunepe','El_Salvador','Ensenada','Fort_Wayne',
'Fortaleza','Glace_Bay','Godthab','Goose_Bay','Grand_Turk','Grenada','Guadeloupe','Guatemala','Guayaquil','Guyana',
'Halifax','Havana','Hermosillo','Indiana/Indianapolis','Indiana/Knox','Indiana/Marengo','Indiana/Petersburg','Indiana/Tell_City',
'Indiana/Vevay','Indiana/Vincennes','Indiana/Winamac','Indianapolis','Inuvik','Iqaluit','Jamaica','Jujuy','Juneau',
'Kentucky/Louisville','Kentucky/Monticello','Knox_IN','Kralendijk','La_Paz','Lima','Los_Angeles','Louisville','Lower_Princes',
'Maceio','Managua','Manaus','Marigot','Martinique','Matamoros','Mazatlan','Mendoza','Menominee','Merida','Metlakatla',
'Mexico_City','Miquelon','Moncton','Monterrey','Montevideo','Montreal','Montserrat','Nassau','New_York','Nipigon','Nome',
'Noronha','North_Dakota/Beulah','North_Dakota/Center','North_Dakota/New_Salem','Ojinaga','Panama','Pangnirtung',
'Paramaribo','Phoenix','Port-au-Prince','Port_of_Spain','Porto_Acre','Porto_Velho','Puerto_Rico','Rainy_River','Rankin_Inlet',
'Recife','Regina','Resolute','Rio_Branco','Rosario','Santa_Isabel','Santarem','Santiago','Santo_Domingo','Sao_Paulo',
'Scoresbysund','Shiprock','Sitka','St_Barthelemy','St_Johns','St_Kitts','St_Lucia','St_Thomas','St_Vincent','Swift_Current',
'Tegucigalpa','Thule','Thunder_Bay','Tijuana','Toronto','Tortola','Vancouver','Virgin','Whitehorse','Winnipeg','Yakutat','Yellowknife'		
		],
		"Asia"=>[
'Aden','Almaty','Amman','Anadyr','Aqtau','Aqtobe','Ashgabat','Ashkhabad','Baghdad','Bahrain','Baku','Bangkok','Beirut',
'Bishkek','Brunei','Calcutta','Chita','Choibalsan','Chongqing','Chungking','Colombo','Dacca','Damascus','Dhaka','Dili','Dubai',
'Dushanbe','Gaza','Harbin','Hebron','Ho_Chi_Minh','Hong_Kong','Hovd','Irkutsk','Istanbul','Jakarta','Jayapura','Jerusalem',
'Kabul','Kamchatka','Karachi','Kashgar','Kathmandu','Katmandu','Khandyga','Kolkata','Krasnoyarsk','Kuala_Lumpur',
'Kuching','Kuwait','Macao','Macau','Magadan','Makassar','Manila','Muscat','Nicosia','Novokuznetsk','Novosibirsk','Omsk','Oral',
'Phnom_Penh','Pontianak','Pyongyang','Qatar','Qyzylorda','Rangoon','Riyadh','Saigon','Sakhalin','Samarkand','Seoul',
'Shanghai','Singapore','Srednekolymsk','Taipei','Tashkent','Tbilisi','Tehran','Tel_Aviv','Thimbu','Thimphu','Tokyo',
'Ujung_Pandang','Ulaanbaatar','Ulan_Bator','Urumqi','Ust-Nera','Vientiane','Vladivostok','Yakutsk','Yekaterinburg','Yerevan'		
		],
		"Antarctica"=>[
'Casey','Davis','DumontDUrville','Macquarie','Mawson','McMurdo','Palmer','Rothera','South_Pole','Syowa','Troll','Vostok'		
		],
		"Arctic"=>[
"Longyearbyen",		
		],
		"Atlantic"=>[
'Azores','Bermuda','Canary','Cape_Verde','Faeroe','Faroe','Jan_Mayen','Madeira','Reykjavik','South_Georgia','St_Helena','Stanley'
		],
		"Australia"=>[
'ACT','Adelaide','Brisbane','Broken_Hill','Canberra','Currie','Darwin','Eucla','Hobart','LHI','Lindeman','Lord_Howe','Melbourne',
'North','NSW','Perth','Queensland','South','Sydney','Tasmania','Victoria','West','Yancowinna'		
		],
		"Europe"=>[
'Amsterdam','Andorra','Athens','Belfast','Belgrade','Berlin','Bratislava','Brussels','Bucharest','Budapest','Busingen',
'Chisinau','Copenhagen','Dublin','Gibraltar','Guernsey','Helsinki','Isle_of_Man','Istanbul','Jersey','Kaliningrad','Kiev',
'Lisbon','Ljubljana','London','Luxembourg','Madrid','Malta','Mariehamn','Minsk','Monaco','Moscow','Nicosia','Oslo','Paris',
'Podgorica','Prague','Riga','Rome','Samara','San_Marino','Sarajevo','Simferopol','Skopje','Sofia','Stockholm','Tallinn','Tirane',
'Tiraspol','Uzhgorod','Vaduz','Vatican','Vienna','Vilnius','Volgograd','Warsaw','Zagreb','Zaporozhye','Zurich'		
		],
		"Indian"=>[
'Antananarivo','Chagos','Christmas','Cocos','Comoro','Kerguelen','Mahe','Maldives','Mauritius','Mayotte','Reunion'		
		],
		"Pacific"=>[
'Apia','Auckland','Chatham','Chuuk','Easter','Efate','Enderbury','Fakaofo','Fiji','Funafuti','Galapagos','Gambier','Guadalcanal',
'Guam','Honolulu','Johnston','Kiritimati','Kosrae','Kwajalein','Majuro','Marquesas','Midway','Nauru','Niue','Norfolk','Noumea',
'Pago_Pago','Palau','Pitcairn','Pohnpei','Ponape','Port_Moresby','Rarotonga','Saipan','Samoa','Tahiti','Tarawa','Tongatapu',
'Truk','Wake','Wallis','Yap'		
		],
		"Others"=>[
'Brazil/Acre','Brazil/DeNoronha','Brazil/East','Brazil/West','Canada/Atlantic','Canada/Central','Canada/East-Saskatchewan',
'Canada/Eastern','Canada/Mountain','Canada/Newfoundland','Canada/Pacific','Canada/Saskatchewan','Canada/Yukon',
'CET','Chile/Continental','Chile/EasterIsland','CST6CDT','Cuba','EET','Egypt','Eire','EST','EST5EDT','Etc/GMT',
'Etc/GMT+0','Etc/GMT+1','Etc/GMT+10','Etc/GMT+11','Etc/GMT+12','Etc/GMT+2','Etc/GMT+3','Etc/GMT+4','Etc/GMT+5',
'Etc/GMT+6','Etc/GMT+7','Etc/GMT+8','Etc/GMT+9','Etc/GMT-0','Etc/GMT-1','Etc/GMT-10','Etc/GMT-11','Etc/GMT-12',
'Etc/GMT-13','Etc/GMT-14','Etc/GMT-2','Etc/GMT-3','Etc/GMT-4','Etc/GMT-5','Etc/GMT-6','Etc/GMT-7','Etc/GMT-8',
'Etc/GMT-9','Etc/GMT0','Etc/Greenwich','Etc/UCT','Etc/Universal','Etc/UTC','Etc/Zulu','Factory','GB','GB-Eire','GMT',
'GMT+0','GMT-0','GMT0','Greenwich','Hongkong','HST','Iceland','Iran','Israel','Jamaica','Japan','Kwajalein','Libya','MET',
'Mexico/BajaNorte','Mexico/BajaSur','Mexico/General','MST','MST7MDT','Navajo','NZ','NZ-CHAT','Poland','Portugal','PRC',
'PST8PDT','ROC','ROK','Singapore','Turkey','UCT','Universal','US/Alaska','US/Aleutian','US/Arizona','US/Central',
'US/East-Indiana','US/Eastern','US/Hawaii','US/Indiana-Starke','US/Michigan','US/Mountain','US/Pacific','US/Pacific-New',
'US/Samoa','UTC','W-SU','WET'
		],
	];
	



?>