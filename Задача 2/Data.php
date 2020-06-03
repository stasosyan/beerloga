<?php
$birthday = '27.06.2001';

$cd = new \DateTime('today');
$bd = new \DateTime($birthday);
$bd->setDate($cd->format('Y'), $bd->format('m'), $bd->format('d'));
$tmp = $cd->diff($bd);
if($tmp->invert){
    $bd->modify('+1 year');
    $tmp = $cd->diff($bd);
}
echo "Осталось до дня рождения: ";
echo $tmp->days;