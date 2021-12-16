<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Model;

use Lofmp\Easyship\Api\Data\EasyshipAccountInterface;
use Lofmp\Easyship\Api\Data\EasyshipAccountInterfaceFactory;
use Lofmp\Easyship\Api\Data\EasyshipAccountSearchResultsInterfaceFactory;
use Lofmp\Easyship\Api\EasyshipAccountRepositoryInterface;
use Lofmp\Easyship\Model\ResourceModel\EasyshipAccount as ResourceEasyshipAccount;
use Lofmp\Easyship\Model\ResourceModel\EasyshipAccount\CollectionFactory as EasyshipAccountCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class EasyshipAccountRepository implements EasyshipAccountRepositoryInterface
{

    /**
     * @var EasyshipAccountCollectionFactory
     */
    protected $easyshipAccountCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var EasyshipAccountInterfaceFactory
     */
    protected $easyshipAccountFactory;

    /**
     * @var ResourceEasyshipAccount
     */
    protected $resource;

    /**
     * @var EasyshipAccount
     */
    protected $searchResultsFactory;


    /**
     * @param ResourceEasyshipAccount $resource
     * @param EasyshipAccountInterfaceFactory $easyshipAccountFactory
     * @param EasyshipAccountCollectionFactory $easyshipAccountCollectionFactory
     * @param EasyshipAccountSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceEasyshipAccount $resource,
        EasyshipAccountInterfaceFactory $easyshipAccountFactory,
        EasyshipAccountCollectionFactory $easyshipAccountCollectionFactory,
        EasyshipAccountSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->easyshipAccountFactory = $easyshipAccountFactory;
        $this->easyshipAccountCollectionFactory = $easyshipAccountCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(
        EasyshipAccountInterface $easyshipAccount
    ) {
        try {
            $this->resource->save($easyshipAccount);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the easyshipAccount: %1',
                $exception->getMessage()
            ));
        }
        return $easyshipAccount;
    }

    /**
     * @inheritDoc
     */
    public function get($easyshipAccountId)
    {
        $easyshipAccount = $this->easyshipAccountFactory->create();
        $this->resource->load($easyshipAccount, $easyshipAccountId);
        if (!$easyshipAccount->getId()) {
            throw new NoSuchEntityException(__('EasyshipAccount with id "%1" does not exist.', $easyshipAccountId));
        }
        return $easyshipAccount;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->easyshipAccountCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(
        EasyshipAccountInterface $easyshipAccount
    ) {
        try {
            $easyshipAccountModel = $this->easyshipAccountFactory->create();
            $this->resource->load($easyshipAccountModel, $easyshipAccount->getEasyshipaccountId());
            $this->resource->delete($easyshipAccountModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the EasyshipAccount: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($easyshipAccountId)
    {
        return $this->delete($this->get($easyshipAccountId));
    }
}

