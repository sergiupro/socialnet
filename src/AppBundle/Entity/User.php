<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=45, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="former_name", type="string", length=45, nullable=true)
     */
    private $formerName;

    /**
     * @var string
     *
     * @ORM\Column(name="display_name", type="string", length=45, nullable=true)
     */
    private $displayName;

    /**
     * @var string
     *
     * @ORM\Column(name="professional_headline", type="string", length=45, nullable=true)
     */
    private $professionalHeadline;

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=45, nullable=true)
     */
    private $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="platforms", type="string", length=45, nullable=true)
     */
    private $platforms;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=45, nullable=true)
     */
    private $summary;


}

