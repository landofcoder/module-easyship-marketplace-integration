<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface EasyshipAccountRepositoryInterface
{

    /**
     * Save EasyshipAccount
     * @param \Lofmp\Easyship\Api\Data\EasyshipAccountInterface $easyshipAccount
     * @return \Lofmp\Easyship\Api\Data\EasyshipAccountInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Lofmp\Easyship\Api\Data\EasyshipAccountInterface $easyshipAccount
    );

    /**
     * Retrieve EasyshipAccount
     * @param string $easyshipaccountId
     * @return \Lofmp\Easyship\Api\Data\EasyshipAccountInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($easyshipaccountId);

    /**
     * Retrieve EasyshipAccount matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Lofmp\Easyship\Api\Data\EasyshipAccountSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete EasyshipAccount
     * @param \Lofmp\Easyship\Api\Data\EasyshipAccountInterface $easyshipAccount
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Lofmp\Easyship\Api\Data\EasyshipAccountInterface $easyshipAccount
    );

    /**
     * Delete EasyshipAccount by ID
     * @param string $easyshipaccountId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($easyshipaccountId);
}

