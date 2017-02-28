<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industry
 *
 * @ORM\Table(name="industry", indexes={@ORM\Index(name="fk_industry_career_track1_idx", columns={"career_track_career_track_id"})})
 * @ORM\Entity
 */
class Industry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_industry", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIndustry;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=45, nullable=true)
     */
    private $industry;

    /**
     * @var \CareerTrack
     *
     * @ORM\ManyToOne(targetEntity="CareerTrack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career_track_career_track_id", referencedColumnName="career_track_id")
     * })
     */
    private $careerTrackCareerTrack;


}

