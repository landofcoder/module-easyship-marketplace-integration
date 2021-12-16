<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Api\Data;

interface EasyshipAccountInterface
{

    const CREATED_AT = 'created_at';
    const USE_LIVE_RATE = 'use_live_rate';
    const STATUS = 'status';
    const WEBHOOK_SECRET_KEY = 'webhook_secret_key';
    const METHOD_NAME = 'method_name';
    const NAME = 'name';
    const SELLER_ID = 'seller_id';
    const EASYSHIPACCOUNT_ID = 'easyshipaccount_id';
    const ACCOUNT_ID = 'account_id';
    const COUNTRY = 'country';
    const FIXED_RATE = 'fixed_rate';
    const ACCESS_TOKEN = 'access_token';

    /**
     * Get easyshipaccount_id
     * @return string|null
     */
    public function getEasyshipaccountId();

    /**
     * Set easyshipaccount_id
     * @param string $easyshipaccountId
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setEasyshipaccountId($easyshipaccountId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setName($name);

    /**
     * Get country
     * @return string|null
     */
    public function getCountry();

    /**
     * Set country
     * @param string $country
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setCountry($country);

    /**
     * Get access_token
     * @return string|null
     */
    public function getAccessToken();

    /**
     * Set access_token
     * @param string $accessToken
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setAccessToken($accessToken);

    /**
     * Get account_id
     * @return string|null
     */
    public function getAccountId();

    /**
     * Set account_id
     * @param string $accountId
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setAccountId($accountId);

    /**
     * Get webhook_secret_key
     * @return string|null
     */
    public function getWebhookSecretKey();

    /**
     * Set webhook_secret_key
     * @param string $webhookSecretKey
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setWebhookSecretKey($webhookSecretKey);

    /**
     * Get method_name
     * @return string|null
     */
    public function getMethodName();

    /**
     * Set method_name
     * @param string $methodName
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setMethodName($methodName);

    /**
     * Get use_live_rate
     * @return string|null
     */
    public function getUseLiveRate();

    /**
     * Set use_live_rate
     * @param string $useLiveRate
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setUseLiveRate($useLiveRate);

    /**
     * Get fixed_rate
     * @return string|null
     */
    public function getFixedRate();

    /**
     * Set fixed_rate
     * @param string $fixedRate
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setFixedRate($fixedRate);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get seller_id
     * @return string|null
     */
    public function getSellerId();

    /**
     * Set seller_id
     * @param string $sellerId
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setSellerId($sellerId);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Lofmp\Easyship\EasyshipAccount\Api\Data\EasyshipAccountInterface
     */
    public function setStatus($status);
}

