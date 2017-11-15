<?php
/**
 * Class Stp
 *
 * @author    Roberto Flores <roberto@ahorrolibre.com>
 * @copyright Ahorro Libre, Inc.
 * @package   Common\Misc\Psp
 */

namespace AhorroLibre\STP;


class StpInfoSign
{

    protected $name;
    protected $pwd;
    protected $alias;

    function __construct($name, $pwd, $alias)
    {

        $this->name = $name;
        $this->pwd = $pwd;
        $this->alias = $alias;

    }

    public function sendPayment()
    {



    }

}