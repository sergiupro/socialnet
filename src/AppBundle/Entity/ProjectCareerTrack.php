<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectCareerTrack
 *
 * @ORM\Table(name="project_career_track", indexes={@ORM\Index(name="fk_project_career_track_career_track1_idx", columns={"career_track_career_track_id"}), @ORM\Index(name="fk_project_career_track_project_description1_idx", columns={"project_description_id_project_description"})})
 * @ORM\Entity
 */
class ProjectCareerTrack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_project_career_track", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjectCareerTrack;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_id_project", type="integer", nullable=false)
     */
    private $projectIdProject;

    /**
     * @var \CareerTrack
     *
     * @ORM\ManyToOne(targetEntity="CareerTrack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career_track_career_track_id", referencedColumnName="career_track_id")
     * })
     */
    private $careerTrackCareerTrack;

    /**
     * @var \ProjectDescription
     *
     * @ORM\ManyToOne(targetEntity="ProjectDescription")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_description_id_project_description", referencedColumnName="id_project_description")
     * })
     */
    private $projectDescriptionProjectDescription;


}

