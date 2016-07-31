<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CoreDomain\Objects\Signature as BaseSignature;
/**
 * Signature
 *
 * @ORM\Table(name="signature")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\SignatureRepository")
 */
class Signature extends BaseSignature
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="proj_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $projId;

    /**
     * @var string
     *
     * @ORM\Column(name="signatory_full_name", type="string", length=255, nullable=true, unique=false)
     */
    protected $signatoryFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="signatory_institution_department", type="string", length=255, nullable=true, unique=false)
     */
    protected $signatoryInstitutionDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="signatory_institution_department_address", type="string", length=255, nullable=true, unique=false)
     */
    protected $signatoryInstitutionDepartmentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="signatory_institution_id", type="string", length=255, nullable=true, unique=false)
     */
    protected $signatoryInstitutionID;

    /**
     * @var string
     *
     * @ORM\Column(name="signatory_title", type="string", length=255, nullable=true, unique=false)
     */
    protected $signatoryTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_attachment", type="string", length=255, nullable=true, unique=false)
     */
    protected $signatureAttachment;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_date", type="datetimetz", nullable=true, unique=false)
     */
    protected $signatureDate;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_type", type="string", length=255, nullable=true, unique=false)
     */
    protected $signatureType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated_at", type="datetime")
     */
    protected $lastUpdatedAt;
}