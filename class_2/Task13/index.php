<?php
namespace App;
require __DIR__."/vendor/autoload.php";
use App\Rational;

$rat1 = new Rational(3, 9);
print_r($rat1->getNumer()); // 3
print_r('</br>');
print_r($rat1->getDenom()); // 9
print_r('</br>');
$rat2 = new Rational(10, 3);
 
print_r($rat3 = $rat1->add($rat2)); // Абстракция для рационального числа 99/27
print_r('</br>');
print_r($rat3->getNumer()); // 99
print_r('</br>');
print_r($rat3->getDenom()); // 27
print_r('</br>');
 
print_r($rat4 = $rat1->sub($rat2)); // Абстракция для рационального числа -81/27
print_r('</br>');
print_r($rat4->getNumer()); // -81
print_r('</br>');
print_r($rat4->getDenom()); // 27
print_r('</br>');

// $rat5 = new Rational(-3, -9);
// $rat6 = new Rational(-10, -3);
// print_r($rat3 = $rat5 ->add($rat6 )); // Абстракция для рационального числа 99/27
// print_r('</br>');
// print_r($rat3->getNumer()); // 99
// print_r('</br>');
// print_r($rat3->getDenom()); // 27
// print_r('</br>');
 
// print_r($rat4 = $rat5->sub($rat6 )); // Абстракция для рационального числа -81/27
// print_r('</br>');
// print_r($rat4->getNumer()); // -81
// print_r('</br>');
// print_r($rat4->getDenom()); // 27
// print_r('</br>');