<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAccountContact
 *
 * @ORM\Table(name="user_account_contact", indexes={@ORM\Index(name="fk_user_account_contact_user_idx", columns={"user_id"}), @ORM\Index(name="fk_user_account_contact_source_idx", columns={"contact_source_id"})})
 * @ORM\Entity
 */
class UserAccountContact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_account_contact_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userAccountContactId;

    /**
     * @var \ContactSource
     *
     * @ORM\ManyToOne(targetEntity="ContactSource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_source_id", referencedColumnName="contact_source_id")
     * })
     */
    private $contactSource;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;


}

