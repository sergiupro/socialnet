<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactInfo
 *
 * @ORM\Table(name="contact_info", indexes={@ORM\Index(name="fk_contact_user1_idx", columns={"user_id_user"})})
 * @ORM\Entity
 */
class ContactInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactId;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_number", type="integer", nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_type", type="string", nullable=true)
     */
    private $phoneType;

    /**
     * @var string
     *
     * @ORM\Column(name="im", type="string", length=45, nullable=true)
     */
    private $im;

    /**
     * @var string
     *
     * @ORM\Column(name="im_type", type="string", nullable=true)
     */
    private $imType;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

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

