<?php
$file = file_get_contents('data.xml');
$xml = new SimpleXMLElement($file);
print_r($xml->Address[0]->attributes()->Type->__toString());
print_r($xml->Address[0]->__toString());
echo "<br />";
print_r($xml->Address[0]->Name->__toString());
echo '<br />';
print_r($xml->Address[0]->Street->__toString());
echo '<br />';
print_r($xml->Address[0]->City->__toString());

print_r($xml->Address[0]->State->__toString());
echo '<br />';

print_r($xml->Address[0]->Zip->__toString());
echo '<br />';

print_r($xml->Address[0]->Country->__toString());
echo '<br /><br />';

print_r($xml->Address[1]->attributes()->Type->__toString());
print_r($xml->Address->__toString());
echo '<br />';

print_r($xml->Address[1]->Name->__toString());
echo '<br />';

print_r($xml->Address[1]->Street->__toString());
echo '<br />';

print_r($xml->Address[1]->State->__toString());
echo '<br />';

print_r($xml->Address[1]->Zip->__toString());
echo '<br />';

print_r($xml->Address[1]->Country->__toString());
echo '<br /><br />';

print_r($xml->DeliveryNotes->__toString());
echo '<br /><br />';

print_r($xml->Items->Item[0]->attributes()->PartNumber->__toString());
print_r($xml->Items->Item[0]->__toString());
echo '<br />';

print_r($xml->Items->Item[0]->ProductName->__toString());
echo '<br />';

print_r($xml->Items->Item[0]->Quantity->__toString());
echo '<br />';

print_r($xml->Items->Item[0]->USPrice->__toString());
echo '<br />';

print_r($xml->Items->Item[0]->Comment->__toString());
echo '<br /><br />';

print_r($xml->Items->Item[1]->attributes()->PartNumber->__toString());
print_r($xml->Items->Item[1]->__toString());
echo '<br />';

print_r($xml->Items->Item[1]->ProductName->__toString());
echo '<br />';

print_r($xml->Items->Item[1]->Quantity->__toString());
echo '<br />';

print_r($xml->Items->Item[1]->USPrice->__toString());
echo '<br />';

print_r($xml->Items->Item[1]->ShipDate->__toString());
echo '<br /><br />';


/*// считываем данные из файла
$xml = simplexml_load_file('data.xml');
// проходимся по каждому item и выводим на экран
foreach ($xml->Items->Item as $item) {
    echo $item->ProductName . '<br/>';
    echo $item->Quantity . '<br/>';
    echo $item->USPrice . '<br/>';
    echo $item->Comment . '<br/>';
    echo $item->ShipDate . '<br/>';
}*/

die();