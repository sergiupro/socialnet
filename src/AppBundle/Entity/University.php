<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * University
 *
 * @ORM\Table(name="university", indexes={@ORM\Index(name="fk_university_location1_idx", columns={"location_id_location"})})
 * @ORM\Entity
 */
class University
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_university", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUniversity;

    /**
     * @var string
     *
     * @ORM\Column(name="university_name", type="string", length=45, nullable=true)
     */
    private $universityName;

    /**
     * @var string
     *
     * @ORM\Column(name="university_website", type="string", length=45, nullable=true)
     */
    private $universityWebsite;

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

