<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class MyEasyship implements ResolverInterface
{

    private $myEasyshipDataProvider;

    /**
     * @param DataProvider\MyEasyship $myEasyshipRepository
     */
    public function __construct(
        DataProvider\MyEasyship $myEasyshipDataProvider
    ) {
        $this->myEasyshipDataProvider = $myEasyshipDataProvider;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $myEasyshipData = $this->myEasyshipDataProvider->getMyEasyship();
        return $myEasyshipData;
    }
}

