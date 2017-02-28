<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserIndustry
 *
 * @ORM\Table(name="user_industry", indexes={@ORM\Index(name="fk_user_industry_user1_idx", columns={"user_id_user"}), @ORM\Index(name="fk_user_industry_industry1_idx", columns={"industry_id_industry"})})
 * @ORM\Entity
 */
class UserIndustry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_industry", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUserIndustry;

    /**
     * @var \Industry
     *
     * @ORM\ManyToOne(targetEntity="Industry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="industry_id_industry", referencedColumnName="id_industry")
     * })
     */
    private $industryIndustry;

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

