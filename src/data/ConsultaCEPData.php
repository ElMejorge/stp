<?php

namespace AhorroLibre\STP\Data;

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 11/21/17
 * Time: 11:55 AM
 */
class ConsultaCEPData
{
    /** @var int */
    private $beneficiaryBankId;

    /** @var int */
    private $applicantBankId;

    /** @var string */
    private $searchCode;

    /** @var string */
    private $beneficiaryAccountNumber;

    /** @var \DateTime */
    private $paymentDate;

    /** @var float */
    private $amount;

    /**
     * @return int
     */
    public function getBeneficiaryBankId(): int
    {
        return $this->beneficiaryBankId;
    }

    /**
     * @param int $beneficiaryBankId
     * @return ConsultaCEPData
     */
    public function setBeneficiaryBankId(int $beneficiaryBankId): ConsultaCEPData
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
     * @return ConsultaCEPData
     */
    public function setApplicantBankId(int $applicantBankId): ConsultaCEPData
    {
        $this->applicantBankId = $applicantBankId;
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
     * @return ConsultaCEPData
     */
    public function setSearchCode(string $searchCode): ConsultaCEPData
    {
        $this->searchCode = $searchCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiaryAccountNumber(): string
    {
        return $this->beneficiaryAccountNumber;
    }

    /**
     * @param string $beneficiaryAccountNumber
     * @return ConsultaCEPData
     */
    public function setBeneficiaryAccountNumber(string $beneficiaryAccountNumber): ConsultaCEPData
    {
        $this->beneficiaryAccountNumber = $beneficiaryAccountNumber;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDate(): DateTime
    {
        return $this->paymentDate;
    }

    /**
     * @param DateTime $paymentDate
     * @return ConsultaCEPData
     */
    public function setPaymentDate(DateTime $paymentDate): ConsultaCEPData
    {
        $this->paymentDate = $paymentDate;
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
     * @return ConsultaCEPData
     */
    public function setAmount(float $amount): ConsultaCEPData
    {
        $this->amount = $amount;
        return $this;
    }
}