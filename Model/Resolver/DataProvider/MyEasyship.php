<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Model\Resolver\DataProvider;

class MyEasyship
{

    private $request;

    /**
     * @param \Lofmp\Easyship\Model\Api\Request $request
     */
    public function __construct(
        \Lofmp\Easyship\Model\Api\Request $request
    ) {
        $this->request = $request;
    }

    public function getMyEasyship()
    {
        return 'proviced data';
    }
}

