<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Model\ResourceModel\EasyshipAccount;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'easyshipaccount_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Lofmp\Easyship\Model\EasyshipAccount::class,
            \Lofmp\Easyship\Model\ResourceModel\EasyshipAccount::class
        );
    }
}

