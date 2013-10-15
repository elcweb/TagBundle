<?php

namespace Elcweb\TagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FPN\TagBundle\Entity\Tagging as BaseTagging;

/**
 * Tagging
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tagging extends BaseTagging
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
