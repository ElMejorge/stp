<?php

namespace AhorroLibre\STP\Data;

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 11/21/17
 * Time: 11:23 AM
 */
class registraOrdenData
{
    /** @var string */
    private $beneficiaryAccountNumber;

    /** @var string */
    private $beneficiaryName;

    /** @var string */
    private $beneficiaryRFC;

    /** @var int */
    private $beneficiaryAccountType;

    /** @var string */
    private $searchCode;

    /** @var string */
    private $paymentDescription;

    /** @var string */
    private $companyName;

    /** @var string */
    private $signature;

    /** @var int */
    private $beneficiaryBankId;

    /** @var int */
    private $applicantBankId;

    /** @var float */
    private $amount;

    /** @var int */
    private $referenceNumber;

    /** @var int */
    private $paymentType;

    /**
     * @return string
     */
    public function getBeneficiaryAccountNumber(): string
    {
        return $this->beneficiaryAccountNumber;
    }

    /**
     * @param string $beneficiaryAccountNumber
     * @return registraOrdenData
     */
    public function setBeneficiaryAccountNumber(string $beneficiaryAccountNumber): registraOrdenData
    {
        $this->beneficiaryAccountNumber = $beneficiaryAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiaryName(): string
    {
        return $this->beneficiaryName;
    }

    /**
     * @param string $beneficiaryName
     * @return registraOrdenData
     */
    public function setBeneficiaryName(string $beneficiaryName): registraOrdenData
    {
        $this->beneficiaryName = $beneficiaryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiaryRFC(): string
    {
        return $this->beneficiaryRFC;
    }

    /**
     * @param string $beneficiaryRFC
     * @return registraOrdenData
     */
    public function setBeneficiaryRFC(string $beneficiaryRFC): registraOrdenData
    {
        $this->beneficiaryRFC = $beneficiaryRFC;
        return $this;
    }

    /**
     * @return int
     */
    public function getBeneficiaryAccountType(): int
    {
        return $this->beneficiaryAccountType;
    }

    /**
     * @param int $beneficiaryAccountType
     * @return registraOrdenData
     */
    public function setBeneficiaryAccountType(int $beneficiaryAccountType): registraOrdenData
    {
        $this->beneficiaryAccountType = $beneficiaryAccountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchCode(): string
    {
        return $this->searchCode;
    }

    /**
     * @param string $searchCode
     * @return registraOrdenData
     */
    public function setSearchCode(string $searchCode): registraOrdenData
    {
        $this->searchCode = $searchCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentDescription(): string
    {
        return $this->paymentDescription;
    }

    /**
     * @param string $paymentDescription
     * @return registraOrdenData
     */
    public function setPaymentDescription(string $paymentDescription): registraOrdenData
    {
        $this->paymentDescription = $paymentDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return registraOrdenData
     */
    public function setCompanyName(string $companyName): registraOrdenData
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return registraOrdenData
     */
    public function setSignature(string $signature): registraOrdenData
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return int
     */
    public function getBeneficiaryBankId(): int
    {
        return $this->beneficiaryBankId;
    }

    /**
     * @param int $beneficiaryBankId
     * @return registraOrdenData
     */
    public function setBeneficiaryBankId(int $beneficiaryBankId): registraOrdenData
    {
        $this->beneficiaryBankId = $beneficiaryBankId;
        return $this;
    }

    /**
     * @return int
     */
    public function getApplicantBankId(): int
    {
        return $this->applicantBankId;
    }

    /**
     * @param int $applicantBankId
     * @return registraOrdenData
     */
    public function setApplicantBankId(int $applicantBankId): registraOrdenData
    {
        $this->applicantBankId = $applicantBankId;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return registraOrdenData
     */
    public function setAmount(float $amount): registraOrdenData
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceNumber(): int
    {
        return $this->referenceNumber;
    }

    /**
     * @param int $referenceNumber
     * @return registraOrdenData
     */
    public function setReferenceNumber(int $referenceNumber): registraOrdenData
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentType(): int
    {
        return $this->paymentType;
    }

    /**
     * @param int $paymentType
     * @return registraOrdenData
     */
    public function setPaymentType(int $paymentType): registraOrdenData
    {
        $this->paymentType = $paymentType;
        return $this;
    }
}