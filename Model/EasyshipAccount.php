<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Model;

use Lofmp\Easyship\Api\Data\EasyshipAccountInterface;
use Magento\Framework\Model\AbstractModel;

class EasyshipAccount extends AbstractModel implements EasyshipAccountInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Lofmp\Easyship\Model\ResourceModel\EasyshipAccount::class);
    }

    /**
     * @inheritDoc
     */
    public function getEasyshipaccountId()
    {
        return $this->_get(self::EASYSHIPACCOUNT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setEasyshipaccountId($easyshipaccountId)
    {
        return $this->setData(self::EASYSHIPACCOUNT_ID, $easyshipaccountId);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getCountry()
    {
        return $this->_get(self::COUNTRY);
    }

    /**
     * @inheritDoc
     */
    public function setCountry($country)
    {
        return $this->setData(self::COUNTRY, $country);
    }

    /**
     * @inheritDoc
     */
    public function getAccessToken()
    {
        return $this->_get(self::ACCESS_TOKEN);
    }

    /**
     * @inheritDoc
     */
    public function setAccessToken($accessToken)
    {
        return $this->setData(self::ACCESS_TOKEN, $accessToken);
    }

    /**
     * @inheritDoc
     */
    public function getAccountId()
    {
        return $this->_get(self::ACCOUNT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setAccountId($accountId)
    {
        return $this->setData(self::ACCOUNT_ID, $accountId);
    }

    /**
     * @inheritDoc
     */
    public function getWebhookSecretKey()
    {
        return $this->_get(self::WEBHOOK_SECRET_KEY);
    }

    /**
     * @inheritDoc
     */
    public function setWebhookSecretKey($webhookSecretKey)
    {
        return $this->setData(self::WEBHOOK_SECRET_KEY, $webhookSecretKey);
    }

    /**
     * @inheritDoc
     */
    public function getMethodName()
    {
        return $this->_get(self::METHOD_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setMethodName($methodName)
    {
        return $this->setData(self::METHOD_NAME, $methodName);
    }

    /**
     * @inheritDoc
     */
    public function getUseLiveRate()
    {
        return $this->_get(self::USE_LIVE_RATE);
    }

    /**
     * @inheritDoc
     */
    public function setUseLiveRate($useLiveRate)
    {
        return $this->setData(self::USE_LIVE_RATE, $useLiveRate);
    }

    /**
     * @inheritDoc
     */
    public function getFixedRate()
    {
        return $this->_get(self::FIXED_RATE);
    }

    /**
     * @inheritDoc
     */
    public function setFixedRate($fixedRate)
    {
        return $this->setData(self::FIXED_RATE, $fixedRate);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getSellerId()
    {
        return $this->_get(self::SELLER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setSellerId($sellerId)
    {
        return $this->setData(self::SELLER_ID, $sellerId);
    }

    /**
     * @inheritDoc
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
}

