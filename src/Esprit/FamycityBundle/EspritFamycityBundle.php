<?php

namespace Esprit\FamycityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EspritFamycityBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
