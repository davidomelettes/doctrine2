<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 09/02/18
 * Time: 09:53
 */

namespace Doctrine\Tests\Models\Company;

use Doctrine\ORM\Annotation as ORM;

/**
 * @ORM\Entity
 */
class ShellShellCompany extends ShellCompany
{
    /**
     * @ORM\Column(type="string")
     */
    private $shellShellData;

    /**
     * @return mixed
     */
    public function getShellShellData()
    {
        return $this->shellShellData;
    }

    /**
     * @param mixed $shellShellData
     */
    public function setShellShellData($shellShellData)
    {
        $this->shellShellData = $shellShellData;
    }
}