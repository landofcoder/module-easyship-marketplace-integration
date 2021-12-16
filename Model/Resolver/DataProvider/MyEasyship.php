<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Model\Resolver\DataProvider;

class MyEasyship
{

    private $easyshipAccount;

    /**
     * @param \Lofmp\Easyship\Model\Resolver\EasyshipAccount $easyshipAccount
     */
    public function __construct(
        \Lofmp\Easyship\Model\Resolver\EasyshipAccount $easyshipAccount
    ) {
        $this->easyshipAccount = $easyshipAccount;
    }

    public function getMyEasyship()
    {
        return 'proviced data';
    }
}

