<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="education", indexes={@ORM\Index(name="fk_education_location1_idx", columns={"location_id_location"})})
 * @ORM\Entity
 */
class Education
{
    /**
     * @var integer
     *
     * @ORM\Column(name="education_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $educationId;

    /**
     * @var string
     *
     * @ORM\Column(name="university", type="string", length=45, nullable=true)
     */
    private $university;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id_location", referencedColumnName="id_location")
     * })
     */
    private $locationLocation;


}

