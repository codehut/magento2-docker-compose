<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Vault\Api;

use Magento\Vault\Model\VaultPaymentInterface;

/**
 * Contains methods to retrieve vault payment methods
 * This interface is consistent with \Magento\Payment\Api\PaymentMethodListInterface
 * @api
 */
interface PaymentMethodListInterface
{
    /**
     * Get list of available vault payments
     * @param int $storeId
     * @return VaultPaymentInterface[]
     */
    public function getList($storeId);

    /**
     * Get list of enabled in the configuration vault payments
     * @param int $storeId
     * @return VaultPaymentInterface[]
     */
    public function getActiveList($storeId);
}
