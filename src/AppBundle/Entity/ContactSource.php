<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactSource
 *
 * @ORM\Table(name="contact_source")
 * @ORM\Entity
 */
class ContactSource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contact_source_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactSourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="type_inport", type="string", length=45, nullable=true)
     */
    private $typeInport;


}

