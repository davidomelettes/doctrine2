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
class ShellCompany extends BaseCompany
{
    /**
     * @ORM\Column(type="string")
     */
    private $shellData;

    /**
     * @return mixed
     */
    public function getShellData()
    {
        return $this->shellData;
    }

    /**
     * @param mixed $shellData
     */
    public function setShellData($shellData)
    {
        $this->shellData = $shellData;
    }
}