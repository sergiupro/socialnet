<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserContact
 *
 * @ORM\Table(name="user_contact", indexes={@ORM\Index(name="fk_user_contact_1_idx", columns={"contact_request_id"})})
 * @ORM\Entity
 */
class UserContact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_contact_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userContactId;

    /**
     * @var string
     *
     * @ORM\Column(name="accepted_at", type="string", length=45, nullable=true)
     */
    private $acceptedAt;

    /**
     * @var \ContactRequest
     *
     * @ORM\ManyToOne(targetEntity="ContactRequest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_request_id", referencedColumnName="contact_request_id")
     * })
     */
    private $contactRequest;


}

