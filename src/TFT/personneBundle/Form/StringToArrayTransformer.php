<?php
namespace TFT\personneBundle\Form ;

use Symfony\Component\Form\DataTransformerInterface;

class StringToArrayTransformer implements DataTransformerInterface
{

public function transform($array)

 {

 return $array[0];

 }

 public function reverseTransform($string)

 {

 return array($string);

 }

}
?>