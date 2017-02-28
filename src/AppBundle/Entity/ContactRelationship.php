<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactRelationship
 *
 * @ORM\Table(name="contact_relationship")
 * @ORM\Entity
 */
class ContactRelationship
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contact_relationship_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactRelationshipId;

    /**
     * @var string
     *
     * @ORM\Column(name="relationship", type="string", length=45, nullable=true)
     */
    private $relationship;


}

