<?php

namespace CoreDomain\Objects;


/**
 * Class ResearchDataset
 * @package CoreDomain\Objects
 */
class ResearchDataset extends BaseObjectInterface
{

    /**
     * @var
     */
    protected $captureModes;
    /**
     * @var
     */
    protected $contentDescription;
    /**
     * @var
     */
    protected $destructionPolicy;
    /**
     * @var
     */
    protected $embargoEndDate;
    /**
     * @var
     */
    protected $embargoStartDate;
    /**
     * @var
     */
    protected $ethicsCompliance;
    /**
     * @var
     */
    protected $iPROwnership;
    /**
     * @var
     */
    protected $license;
    /**
     * @var
     */
    protected $licensingofExistingData;
    /**
     * @var
     */
    protected $managedAccessProcedures;
    /**
     * @var
     */
    protected $preservationEndDate;
    /**
     * @var
     */
    protected $preservationStartDate;
    /**
     * @var
     */
    protected $sharingMethod;
    /**
     * @var
     */
    protected $storageAccess;
    /**
     * @var
     */
    protected $storageSecurity;
    /**
     * @var
     */
    protected $storageType;
    /**
     * @var
     */
    protected $structuralApproach;

    /**
     * @return mixed
     */
    public function getCaptureModes()
    {
        return $this->captureModes;
    }

    /**
     * @param mixed $captureModes
     *
     * @return ResearchDataset
     */
    public function setCaptureModes($captureModes)
    {
        $this->captureModes = $captureModes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentDescription()
    {
        return $this->contentDescription;
    }

    /**
     * @param mixed $contentDescription
     *
     * @return ResearchDataset
     */
    public function setContentDescription($contentDescription)
    {
        $this->contentDescription = $contentDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestructionPolicy()
    {
        return $this->destructionPolicy;
    }

    /**
     * @param mixed $destructionPolicy
     *
     * @return ResearchDataset
     */
    public function setDestructionPolicy($destructionPolicy)
    {
        $this->destructionPolicy = $destructionPolicy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmbargoEndDate()
    {
        return $this->embargoEndDate;
    }

    /**
     * @param mixed $embargoEndDate
     *
     * @return ResearchDataset
     */
    public function setEmbargoEndDate($embargoEndDate)
    {
        $this->embargoEndDate = $embargoEndDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmbargoStartDate()
    {
        return $this->embargoStartDate;
    }

    /**
     * @param mixed $embargoStartDate
     *
     * @return ResearchDataset
     */
    public function setEmbargoStartDate($embargoStartDate)
    {
        $this->embargoStartDate = $embargoStartDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEthicsCompliance()
    {
        return $this->ethicsCompliance;
    }

    /**
     * @param mixed $ethicsCompliance
     *
     * @return ResearchDataset
     */
    public function setEthicsCompliance($ethicsCompliance)
    {
        $this->ethicsCompliance = $ethicsCompliance;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIPROwnership()
    {
        return $this->iPROwnership;
    }

    /**
     * @param mixed $iPROwnership
     *
     * @return ResearchDataset
     */
    public function setIPROwnership($iPROwnership)
    {
        $this->iPROwnership = $iPROwnership;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param mixed $license
     *
     * @return ResearchDataset
     */
    public function setLicense($license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLicensingofExistingData()
    {
        return $this->licensingofExistingData;
    }

    /**
     * @param mixed $licensingofExistingData
     *
     * @return ResearchDataset
     */
    public function setLicensingofExistingData($licensingofExistingData)
    {
        $this->licensingofExistingData = $licensingofExistingData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManagedAccessProcedures()
    {
        return $this->managedAccessProcedures;
    }

    /**
     * @param mixed $managedAccessProcedures
     *
     * @return ResearchDataset
     */
    public function setManagedAccessProcedures($managedAccessProcedures)
    {
        $this->managedAccessProcedures = $managedAccessProcedures;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreservationEndDate()
    {
        return $this->preservationEndDate;
    }

    /**
     * @param mixed $preservationEndDate
     *
     * @return ResearchDataset
     */
    public function setPreservationEndDate($preservationEndDate)
    {
        $this->preservationEndDate = $preservationEndDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreservationStartDate()
    {
        return $this->preservationStartDate;
    }

    /**
     * @param mixed $preservationStartDate
     *
     * @return ResearchDataset
     */
    public function setPreservationStartDate($preservationStartDate)
    {
        $this->preservationStartDate = $preservationStartDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSharingMethod()
    {
        return $this->sharingMethod;
    }

    /**
     * @param mixed $sharingMethod
     *
     * @return ResearchDataset
     */
    public function setSharingMethod($sharingMethod)
    {
        $this->sharingMethod = $sharingMethod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageAccess()
    {
        return $this->storageAccess;
    }

    /**
     * @param mixed $storageAccess
     *
     * @return ResearchDataset
     */
    public function setStorageAccess($storageAccess)
    {
        $this->storageAccess = $storageAccess;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageSecurity()
    {
        return $this->storageSecurity;
    }

    /**
     * @param mixed $storageSecurity
     *
     * @return ResearchDataset
     */
    public function setStorageSecurity($storageSecurity)
    {
        $this->storageSecurity = $storageSecurity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorageType()
    {
        return $this->storageType;
    }

    /**
     * @param mixed $storageType
     *
     * @return ResearchDataset
     */
    public function setStorageType($storageType)
    {
        $this->storageType = $storageType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStructuralApproach()
    {
        return $this->structuralApproach;
    }

    /**
     * @param mixed $structuralApproach
     *
     * @return ResearchDataset
     */
    public function setStructuralApproach($structuralApproach)
    {
        $this->structuralApproach = $structuralApproach;
        return $this;
    }

}