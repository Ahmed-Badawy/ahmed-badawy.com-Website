<?php 




	$javaScript_KeyCodes = [ 
 '8'=>'backspace', 
 '9'=>'tab', 
 '13'=>'enter', 
 '16'=>'shift', 
 '17'=>'ctrl', 
 '18'=>'alt', 
 '19'=>'pause/break', 
 '20'=>'caps lock', 
 '27'=>'escape', 
 '33'=>'page up', 
 '34'=>'page down', 
 '35'=>'end', 
 '36'=>'home', 
 '37'=>'left arrow', 
 '38'=>'up arrow', 
 '39'=>'right arrow', 
 '40'=>'down arrow', 
 '45'=>'insert', 
 '46'=>'delete', 
 '48'=>'0', 
 '49'=>'1', 
 '50'=>'2', 
 '51'=>'3', 
 '52'=>'4', 
 '53'=>'5', 
 '54'=>'6', 
 '55'=>'7', 
 '56'=>'8', 
 '57'=>'9', 
 '65'=>'a', 
 '66'=>'b', 
 '67'=>'c', 
 '68'=>'d', 
 '69'=>'e', 
 '70'=>'f', 
 '71'=>'g', 
 '72'=>'h', 
 '73'=>'i', 
 '74'=>'j', 
 '75'=>'k', 
 '76'=>'l', 
 '77'=>'m', 
 '78'=>'n', 
 '79'=>'o', 
 '80'=>'p', 
 '81'=>'q', 
 '82'=>'r', 
 '83'=>'s', 
 '84'=>'t', 
 '85'=>'u', 
 '86'=>'v', 
 '87'=>'w', 
 '88'=>'x', 
 '89'=>'y', 
 '90'=>'z', 
 '91'=>'left window key', 
 '92'=>'right window key', 
 '93'=>'select key', 
 '96'=>'numpad 0', 
 '97'=>'numpad 1', 
 '98'=>'numpad 2', 
 '99'=>'numpad 3', 
 '100'=>'numpad 4', 
 '101'=>'numpad 5', 
 '102'=>'numpad 6', 
 '103'=>'numpad 7', 
 '104'=>'numpad 8', 
 '105'=>'numpad 9', 
 '106'=>'multiply', 
 '107'=>'add', 
 '109'=>'subtract', 
 '110'=>'decimal point', 
 '111'=>'divide', 
 '112'=>'f1', 
 '113'=>'f2', 
 '114'=>'f3', 
 '115'=>'f4', 
 '116'=>'f5', 
 '117'=>'f6', 
 '118'=>'f7', 
 '119'=>'f8', 
 '120'=>'f9', 
 '121'=>'f10', 
 '122'=>'f11', 
 '123'=>'f12', 
 '144'=>'num lock', 
 '145'=>'scroll lock', 
 '186'=>'semi-colon', 
 '187'=>'equal sign', 
 '188'=>'comma', 
 '189'=>'dash', 
 '190'=>'period', 
 '191'=>'forward slash', 
 '192'=>'grave accent', 
 '219'=>'open bracket', 
 '220'=>'back slash', 
 '221'=>'close braket', 
 '222'=>'single quote', 	
	];

$social_id_citys_codes = [
	'01' => 'القاهرة' , '02' => 'الإسكندرية' , '03' => 'بورسعيد' , '04' => 'السويس' , '11' => 'دمياط' , '12' => 'الدقهلية' , '13' => 'الشرقية' , '14' => 'القليوبية' , '15' => 'كفر الشيخ' , '16' => 'الغربية' , '17' => 'المنوفية' , '18' => 'البحيرة' , '19' => 'الإسماعيلية' , '21' => 'الجيزة' , '22' => 'بني سويف' , '23' => 'الفيوم' , '24' => 'المنيا' , '25' => 'أسيوط' , '26' => 'سوهاج' , '27' => 'قنا' , '28' => 'أسوان' , '29' => 'الأقصر' , '31' => 'البحر الأحمر' , '32' => 'الوادى الجديد' , '33' => 'مطروح' , '34' => 'شمال سيناء' , '35' => 'جنوب سيناء' ,  '88' => 'خارج الجمهورية',
];


$cities_telephone_codes=[ '057' => 'فارسكو',  '082' => 'بنى سويف',  '082' => 'ناصر',  '02' => 'القاهرة',  '055' => 'فاقوس',  '086' => 'بنى مزار',  '097' => 'السد العالى',  '03' => 'الإسكندرية',  '064' => 'فايد',  '062' => 'بور توفيق',  '02' => 'السلام (م)',  '064' => 'الإسماعيلية',  '096' => 'فرشوط',  '066' => 'بورسعيد',  '068' => 'السلام',  '095' => 'الأقصر',  '047' => 'فوه',  '066' => 'بور فؤاد',  '050' => 'السنبلاوين',  '084' => 'ابشوى',  '062' => 'فيصل',  '047' => 'بيلا',  '040' => 'السنطة',  '045' => 'أبو المطامير',  '040' => 'قطور',  '048' => 'تلا',  '062' => 'السويس',  '02' => 'أبو النمرس',  '047' => 'قلين',  '097' => 'توشكى',  '048' => 'الشهداء',  '88' => 'أبو تيج',  '02' => 'قليوب',  '093' => 'جرجا',  '016' => 'الصالحية',  '055' => 'أبو حماد',  '096' => 'قنا',  '045' => 'حوش عيسى',  '02' => 'الصف',  '045' => 'أبو حمص',  '013' => 'قها',  '013' => 'دجوا',  '062' => 'الطور',  '086' => 'أبو قرقاص',  '048' => 'قويسنا',  '047' => 'دسوق',  '015' => 'العاشر من رمضان',  '055' => 'أبو كبير',  '02' => 'كابا باط',  '050' => 'دكرنس',  '03' => 'العامرية',  '02' => 'أتفيه',  '03' => 'كفر الدوار',  '045' => 'دمنهور',  '068' => 'العريش',  '050' => 'أجا',  '040' => 'كفر الزيات',  '057' => 'دمياط',  '02' => 'العياط',  '02' => 'اخصاصى',  '047' => 'كفر الشيخ',  '088' => 'ديروط',  '062' => 'الغردقة',  '093' => 'أخميم',  '048' => 'كفر ربيعة',  '086' => 'دير موسى',  '088' => 'الغنايم',  '097' => 'إدفو',  '057' => 'كفر سعد',  '057' => 'رأس البر',  '084' => 'الفيوم',  '097' => 'أسوان',  '013' => 'كفر شكر',  '096' => 'رأس غارب',  '096' => 'القصير',  '088' => 'أسيوط',  '055' => 'كفر صقر',  '03' => 'رشيد',  '02' => 'القناطر الخيرية',  '048' => 'أشمون',  '02' => 'كفر عمار',  '068' => 'رفح',  '064' => 'القنطرة',  '084' => 'أطسا',  '093' => 'كلابشة',  '040' => 'زفتى',  '088' => 'القويسة',  '02' => 'أكواز',  '097' => 'كو امبو',  '048' => 'سرس الليان',  '043' => 'المحلة الكبرى',  '048' => 'الباجور',  '045' => 'كوم حمادة',  '096' => 'سفاجا',  '045' => 'المحمودية',  '088' => 'البدارى',  '03' => 'مراقيا',  '086' => 'سمالوط',  '093' => 'المراغة',  '02' => 'البدرشين',  '03' => 'مرسى طروح',  '082' => 'سمسطا',  '068' => 'المساعيد',  '093' => 'البلينا',  '047' => 'مطوبس',  '043' => 'سمنود',  '050' => 'المطرية',  '02' => 'التبين',  '086' => 'مغاغا',  '084' => 'سنورس',  '050' => 'المنزلة',  '064' => 'التل الكبير',  '086' => 'ملوى',  '093' => 'سوهاج',  '050' => 'المنصورة',  '050' => 'الجمالية',  '086' => 'مطاى',  '047' => 'سيدى سالم',  '086' => 'المنيا',  '047' => 'الحامول',  '093' => 'منشات',  '045' => 'شبراخيت',  '082' => 'الواسطى',  '055' => 'الحسينية',  '088' => 'منفلوط',  '013' => 'شبين القناطر',  '084' => 'أم حنان (المنوفية)',  '02' => 'الحوامدية',  '048' => 'منوف',  '048' => 'شبين الكوم',  '082' => 'أهناسيا',  '088' => 'الخارجة',  '055' => 'منيا القمح',  '050' => 'شربين',  '014' => 'أوسيم',  '02' => '15 مايو',  '050' => 'منية النصر',  '068' => 'شرم الشيخ',  '045' => 'ايتاى البارود',  '02' => 'الخانكة',  '048' => 'ميت أبو الكوم',  '02' => 'شوبك',  '082' => 'ببا',  '088' => 'الداخلة',  '050' => 'ميت غمر',  '084' => 'طامية',  '048' => 'بركة السبع',  '045' => 'الدلنجات',  '013' => 'ميت كنانة',  '093' => 'طما',  '040' => 'بسيون',  '045' => 'الرحمانية',  '048' => 'مينا واحلة',  '040' => 'طنطا',  '055' => 'بلبيس',  '057' => 'الزرقاء',  '048' => 'نادر',  '093' => 'طها',  '047' => 'بلطيم',  '02' => 'الزغونة', 
];

$countries_telephone_codes = [ 'اتحاد روسيا الفدرالي' => '07',  'اثيوبا' => '0251',  'اروبه' => '8-0297',  'اريتريا' => '0291',  'اسبانيا' => '034',  'استراليا' => '061',  'استراليا - المناطق المدارة' => '0672',  'استونيا' => '0372',  'افغانستان' => '093',  'الأردن' => '0962',  'الارجنتين' => '054',  'الاسكا' => '1907',  'الاكوادو' => '0593',  'الامارات العربية' => '0971',  'البانيا' => '0355',  'البحرين' => '0973',  'البرازيل' => '055',  'البرتغال' => '0351',  'البوسنة/هرسك' => '0387',  'الجابون' => '0241',  'الجزائر' => '0213',  'الجمهورية اليمنية' => '0968',  'الدنمارك' => '045',  'السلفادور' => '0503',  'السنغال' => '0221',  'السودان' => '0249',  'السويد' => '046',  'الصومال' => '0252',  'الصين' => '086',  'العراق' => '0964',  'الفاتيكان' => '03966982',  'الفلبين' => '063',  'الكنغو' => '0242',  'الكويت' => '0965',  'المانيا' => '049',  'المكسيك' => '052',  'المملكة السعودية' => '0966',  'المملكة المتحدة' => '044',  'المملكة المغربية' => '0212',  'النرويج' => '047',  'النمسا' => '043',  'النيجر' => '0227',  'الهند' => '091',  'الولايات المتحدة' => '01',  'اليابان' => '081',  'اليونان' => '030',  'انتيجوا وباربودا' => '01268',  'انجولا' => '0244',  'انجويلا' => '01264',  'اندورا' => '0376',  'اندونيسيا' => '062',  'اورجواي' => '0598',  'اوغندا' => '0256',  'ايران' => '098',  'ايرلندا' => '0353',  'ايسلندا' => '0354',  'ايطاليا' => '039',  'بابوا غينيا الجديدة' => '0675',  'باراجواي' => '0595',  'باكستان' => '092',  'بالو' => '0680',  'بربادوس' => '01246',  'برمودا' => '01441',  'بروني' => '0673',  'بلغاريا' => '0359',  'بليجكا' => '032',  'بليز' => '0501',  'بنغلاديش' => '0880',  'بنما' => '0507',  'بنين' => '0229',  'بهاما' => '01242',  'بوتان' => '0975',  'بوتسوانا' => '0267',  'بورتوريكو' => '01787',  'بوركينافاسو' => '0226',  'بورما (مينمار )' => '095',  'بوروندي' => '0257',  'بولندا' => '048',  'بوليفيا' => '0591',  'بولينيسيا الفرنسية (تاهيتي )' => '0689',  'بيرو' => '051',  'تايلاند' => '066',  'تايوان' => '0886',  'تركيا' => '090',  'ترينداد وتوباجوا' => '01868',  'تشاد' => '0235',  'تشيك' => '0420',  'تشيلي' => '056',  'تنزانيا' => '0255',  'توجو' => '0228',  'توفالو' => '0688',  'تونجا' => '0676',  'تونس' => '0216',  'جامايكا' => '01876',  'جبل طارق' => '0350',  'جرينادا' => '01473',  'جرينلاند' => '0299',  'جزر العذراء الأمريكية' => '01340',  'جزر العذراء البريطانية' => '01284',  'جزر الفوكلاند' => '0500',  'جزر القمر' => '0269',  'جزر الكريسماس' => '0619164',  'جزر الكناري' => '034',  'جزر انتيلس (الهولندية )' => '0599',  'جزر تركس وكيكوس' => '01649',  'جزر سلمون' => '0677',  'جزر فارو' => '0298',  'جزر كايمان' => '01345',  'جزر كوك' => '0682',  'جزر كيب فيردي' => '0238',  'جزر مارشال' => '0692',  'جزرماريانا' => '0247',  'جزيرة اسينشن' => '0247',  'جزيرة كوكوز' => '06722',  'جزيرة نورفولك' => '06723',  'جزيرة نيوي' => '0683',  'جمهورية اذربيجان' => '0994',  'جمهورية ارمينا' => '0374',  'جمهورية افريقيا' => '0236',  'جمهورية الدومينيكان' => '01809',  'جمهورية الكنغو الديمقراطية' => '0243',  'جمهورية اليمن' => '967',  'جمهورية اوزباكستان' => '0998',  'جمهورية اوكرانيا' => '0380',  'جمهورية بيلاروس' => '0375',  'جمهورية توركمنيستان' => '0993',  'جمهورية جورجيا' => '0995',  'جمهورية سلوفاكيا' => '0421',  'جمهورية طاجيكستان' => '07377',  'جمهورية غينيا' => '0224',  'جمهورية كازاخستان' => '07',  'جمهورية كرواتيا' => '0385',  'جمهورية ليتوانيا' => '0370',  'جمهورية مصر' => '020',  'جنوب أفريقيا' => '027',  'جواد يلوب' => '0595',  'جوام' => '01671',  'جيبوتي' => '0253',  'دولة قطر' => '974',  'دومينيكا' => '01767',  'دييجوجارسيا' => '046',  'رواندا' => '0250',  'رومانيا' => '040',  'ريونيون' => '0262',  'زامبيا' => '0260',  'زيمبابوي' => '0263',  'ساحل العاج' => '0225',  'سامو (الولايات المتحدة )' => '0684',  'ساموالغربية' => '0685',  'سان مارينو' => '0378',  'ساوتامي وبرنسيبه' => '0239',  'سلطنة عمان' => '0968',  'سلوفينيا' => '0386',  'سنت بيري وميقيولون' => '0508',  'سنت فينسنت' => '0180945',  'سنت كيت ونينس' => '01869',  'سنت لوسيا' => '01758',  'سنت هيكلينا' => '0290',  'سنغافورة' => '065',  'سوازيلاند' => '0268',  'سوريا' => '0963',  'سورينام' => '0597',  'سويسرا' => '041',  'سيراليون' => '0232',  'سيريلانكا' => '094',  'سيشاز' => '0248',  'غانا' => '0233',  'غيانا' => '0592',  'غيانا الفرنسية' => '0594',  'غينيا الاستوائية' => '0240',  'غينيا بيساو' => '0245',  'فانتو' => '0678',  'فرنسا' => '033',  'فلسطين' => '0972',  'فنزويلا' => '058',  'فنلندا' => '0358',  'فيتنام' => '084',  'فيجي' => '0679',  'قبرص' => '0357',  'قرغيزستان' => '0996',  'كاميرون' => '0237',  'كلدونيا الجديدة' => '0687',  'كمبوديا' => '0855',  'كندا' => '01',  'كوبا' => '053',  'كوريا الجنوبية' => '082',  'كوريا الشمالية' => '0850',  'كوستاريكا' => '0506',  'كولومبيا' => '057',  'كيرباتي' => '0686',  'كينيا' => '0254',  'لاتفيا' => '0371',  'لاوس' => '0856',  'لبنان' => '961',  'لشتنشتين' => '0423',  'لوكسمبورج' => '352',  'ليبيا' => '0218',  'ليبيريا' => '0231',  'ليسوتو' => '0266',  'ماديرا' => '035191',  'مارتينيك' => '0596',  'ماكاو' => '0853',  'ماكدونيا' => '0389',  'مالديف' => '0960',  'مالطا' => '0356',  'مالي' => '0223',  'ماليزيا' => '060',  'مايوتي' => '0269',  'مدغششقر' => '0261',  'ملاوي' => '0265',  'منغوليا' => '0976',  'موريتانيا' => '0222',  'موريشيوس' => '0230',  'موزامبيق' => '0258',  'موناكو' => '0377',  'مونتسيرات' => '01664',  'ميكرونيسيا' => '691',  'ناميبيا' => '0264',  'ناورو' => '0674',  'نيبال' => '0977',  'نيجيريا' => '0234',  'نيكاراجوا' => '0505',  'نيوزلندا' => '064',  'هاييتي' => '0509',  'هنجاريا' => '036',  'هندوراس' => '0504',  'هولندا' => '031',  'هونج كونج' => '0852',  'واليس وفوتونا' => '0681',  'يوغسلافيا' => '0381', 
];





?>