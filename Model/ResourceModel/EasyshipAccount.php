<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class EasyshipAccount extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('lofmp_easyship_easyshipaccount', 'easyshipaccount_id');
    }
}

