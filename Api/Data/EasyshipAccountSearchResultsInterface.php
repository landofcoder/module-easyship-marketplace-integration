<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Api\Data;

interface EasyshipAccountSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get EasyshipAccount list.
     * @return \Lofmp\Easyship\Api\Data\EasyshipAccountInterface[]
     */
    public function getItems();

    /**
     * Set name list.
     * @param \Lofmp\Easyship\Api\Data\EasyshipAccountInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

