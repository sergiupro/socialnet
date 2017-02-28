<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactRequest
 *
 * @ORM\Table(name="contact_request", indexes={@ORM\Index(name="fk_contact_request_1_idx", columns={"user_account_contact_id"}), @ORM\Index(name="fk_contact_request_2_idx", columns={"career_track_id"}), @ORM\Index(name="fk_contact_request_contact_relationship1_idx", columns={"contact_relationship_contact_relationship_id"}), @ORM\Index(name="fk_contact_request_user1_idx", columns={"user_id_to"})})
 * @ORM\Entity
 */
class ContactRequest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contact_request_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactRequestId;

    /**
     * @var string
     *
     * @ORM\Column(name="sent_at", type="string", length=45, nullable=true)
     */
    private $sentAt;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

    /**
     * @var \UserAccountContact
     *
     * @ORM\ManyToOne(targetEntity="UserAccountContact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_account_contact_id", referencedColumnName="user_account_contact_id")
     * })
     */
    private $userAccountContact;

    /**
     * @var \CareerTrack
     *
     * @ORM\ManyToOne(targetEntity="CareerTrack")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="career_track_id", referencedColumnName="career_track_id")
     * })
     */
    private $careerTrack;

    /**
     * @var \ContactRelationship
     *
     * @ORM\ManyToOne(targetEntity="ContactRelationship")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_relationship_contact_relationship_id", referencedColumnName="contact_relationship_id")
     * })
     */
    private $contactRelationshipContactRelationship;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_to", referencedColumnName="id_user")
     * })
     */
    private $userTo;


}

