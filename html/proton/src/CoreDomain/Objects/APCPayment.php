<?php

namespace CoreDomain\Objects;


/**
 * Class APCPayment
 *
 * A financial transaction to cover an article processing charge.
 *
 * @package CoreDomain\Objects
 */
class APCPayment extends BaseObjectInterface
{

    /**
     * @var $addedCostsComponent
     *
     * Total of any additional costs e.g. page charges, colour charges, bank charges, exchange charges.
     */
    protected $addedCostsComponent;
    /**
     * @var $amountPaid
     *
     * The amount that was actually paid for the open access,
     * excluding Value Added Tax component and excluding Added Costs Component
     */
    protected $amountPaid;
    /**
     * @var $correctLicenceApplied
     *
     * Whether the article is published under the licence you expected upon payment of the APC.
     */
    protected $correctLicenceApplied;
    /**
     * @var $currency
     *
     * The currency of the amount paid for the APC.
     */
    protected $currency;
    /**
     * @var $date
     *
     * The date that payment leaves the institution's account.
     * Official date in the finance system that payment was made,
     * not the date that the item was processed in a library system
     * or 'committed' for payment.
     */
    protected $date;
    /**
     * @var $licenceType
     *
     * The licence the article has been published under.
     */
    protected $licenceType;
    /**
     * @var $paymentAdjustments
     *
     * Specify whether there was a discount or waived cost on the APC that was paid to a publisher,
     * including instances where the institution has a pre-payment
     * or membership agreement with the publisher.
     */
    protected $paymentAdjustments;
    /**
     * @var $publicationProblemDescription
     *
     * A brief description of the problem with the publication process.
     */
    protected $publicationProblemDescription;
    /**
     * @var $publicationProblems
     *
     * Whether there were any problems with the publication process.
     */
    protected $publicationProblems;
    /**
     * @var $sourceFund
     *
     * The source of funding to pay the APC.
     */
    protected $sourceFund;
    /**
     * @var $sourceGrant
     *
     * The local grant numbers of the funding awards.
     */
    protected $sourceGrant;
    /**
     * @var $VATAmount
     *
     * The amount of VAT paid in addition to the Amount Paid.
     */
    protected $VATAmount;

    /**
     * Method getAddedCostsComponents
     *
     * Gets $addedCostsComponents
     *
     * @return mixed
     */
    public function getAddedCostsComponent() : string
    {
        return $this->addedCostsComponent;
    }

    /**
     * @param mixed $addedCostsComponent
     * @return APCPayment
     */
    public function setAddedCostsComponent($addedCostsComponent) : APCPayment
    {
        $this->addedCostsComponent = $addedCostsComponent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmountPaid() : float
    {
        return $this->amountPaid;
    }

    /**
     * @param mixed $amountPaid
     * @return APCPayment
     */
    public function setAmountPaid($amountPaid) : APCPayment
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorrectLicenceApplied()
    {
        return $this->correctLicenceApplied;
    }

    /**
     * @param mixed $correctLicenceApplied
     * @return APCPayment
     */
    public function setCorrectLicenceApplied($correctLicenceApplied)
    {
        $this->correctLicenceApplied = $correctLicenceApplied;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return APCPayment
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return APCPayment
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLicenceType()
    {
        return $this->licenceType;
    }

    /**
     * @param mixed $licenceType
     * @return APCPayment
     */
    public function setLicenceType($licenceType)
    {
        $this->licenceType = $licenceType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentAdjustments()
    {
        return $this->paymentAdjustments;
    }

    /**
     * @param mixed $paymentAdjustments
     * @return APCPayment
     */
    public function setPaymentAdjustments($paymentAdjustments)
    {
        $this->paymentAdjustments = $paymentAdjustments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationProblemDescription()
    {
        return $this->publicationProblemDescription;
    }

    /**
     * @param mixed $publicationProblemDescription
     * @return APCPayment
     */
    public function setPublicationProblemDescription($publicationProblemDescription)
    {
        $this->publicationProblemDescription = $publicationProblemDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationProblems()
    {
        return $this->publicationProblems;
    }

    /**
     * @param mixed $publicationProblems
     * @return APCPayment
     */
    public function setPublicationProblems($publicationProblems)
    {
        $this->publicationProblems = $publicationProblems;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSourceFund()
    {
        return $this->sourceFund;
    }

    /**
     * @param mixed $sourceFund
     * @return APCPayment
     */
    public function setSourceFund($sourceFund)
    {
        $this->sourceFund = $sourceFund;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSourceGrant()
    {
        return $this->sourceGrant;
    }

    /**
     * @param mixed $sourceGrant
     * @return APCPayment
     */
    public function setSourceGrant($sourceGrant)
    {
        $this->sourceGrant = $sourceGrant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVATAmount()
    {
        return $this->VATAmount;
    }

    /**
     * @param mixed $VATAmount
     * @return APCPayment
     */
    public function setVATAmount($VATAmount)
    {
        $this->VATAmount = $VATAmount;
        return $this;
    }

}