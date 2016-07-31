<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 7/29/16
 * Time: 2:23 PM
 */

namespace CoreDomain\Objects;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class BaseObjectInterface
 *
 * Contains common properties and methods for all Objects.
 *
 * @package CoreDomain\Objects\APCPayment
 */
abstract class BaseObjectInterface
{
    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @var
     * @ORM\Column(type="integer")
     */
    protected $userId;
    /**
     * @var
     * @ORM\Column(type="integer")
     */
    protected $projectId;
    /**
     * @var
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;
    /**
     * @var
     * @ORM\Column(type="datetime")
     */
    protected $lastUpdatedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return BaseObjectInterface
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return BaseObjectInterface
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param mixed $projectId
     * @return BaseObjectInterface
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return BaseObjectInterface
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedAt()
    {
        return $this->lastUpdatedAt;
    }

    /**
     * @param mixed $lastUpdatedAt
     * @return BaseObjectInterface
     */
    public function setLastUpdatedAt($lastUpdatedAt)
    {
        $this->lastUpdatedAt = $lastUpdatedAt;
        return $this;
    }


}