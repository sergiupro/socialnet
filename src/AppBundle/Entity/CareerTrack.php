<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CareerTrack
 *
 * @ORM\Table(name="career_track", indexes={@ORM\Index(name="fk_career_track_profession1_idx", columns={"profession_id_profession"}), @ORM\Index(name="fk_career_track_company1_idx", columns={"company_company_id"}), @ORM\Index(name="fk_career_track_user1_idx", columns={"user_id_user"})})
 * @ORM\Entity
 */
class CareerTrack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="career_track_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $careerTrackId;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_company_id", referencedColumnName="company_id")
     * })
     */
    private $companyCompany;

    /**
     * @var \Profession
     *
     * @ORM\ManyToOne(targetEntity="Profession")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profession_id_profession", referencedColumnName="profession_id")
     * })
     */
    private $professionProfession;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_user", referencedColumnName="id_user")
     * })
     */
    private $userUser;


}

