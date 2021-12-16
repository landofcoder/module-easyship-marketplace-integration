<?php
/**
 * Copyright © landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lofmp\Easyship\Api;

interface RegisterInterface
{
    /**
     * Save Easyship token
     * @param string $store_id
     * @param string $token
     * @return mixed
     */
    public function saveToken($store_id, $token);
}
