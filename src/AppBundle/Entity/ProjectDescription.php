<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectDescription
 *
 * @ORM\Table(name="project_description", indexes={@ORM\Index(name="fk_project_description_location1_idx", columns={"location_id_location"})})
 * @ORM\Entity
 */
class ProjectDescription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_project_description", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjectDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="costumer_name", type="string", length=45, nullable=true)
     */
    private $costumerName;

    /**
     * @var string
     *
     * @ORM\Column(name="project_title", type="string", length=45, nullable=true)
     */
    private $projectTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="site_url", type="string", length=45, nullable=true)
     */
    private $siteUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="team_size", type="string", length=45, nullable=true)
     */
    private $teamSize;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=45, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="skill", type="string", length=45, nullable=true)
     */
    private $skill;

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

