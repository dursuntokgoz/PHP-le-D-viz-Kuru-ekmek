<?php
$dovizdegerleri = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
$sirainti=0;
foreach($dovizdegerleri->Currency as $dd)
{
$doviz[$sirainti] = [
    "isim" => $dd->CurrencyName,
    "deger" => $dd->Unit,
    "alis" => $dd->BanknoteSelling,
    "satis" => $dd->BanknoteBuying,
];
$sirainti++;
}
echo "<pre>";
print_r($doviz);
echo "</pre>";

