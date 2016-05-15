<?php

namespace TFT\personneBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TFTpersonneBundle extends Bundle
{ public function getParent() {
   return "FOSUserBundle";
 }
}
