<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Framework\Search\Adapter\Mysql;

use Magento\Framework\DB\Select;
use Magento\Framework\Search\RequestInterface;

/**
 * Build base Query for Index
 */
interface IndexBuilderInterface
{
    /**
     * Build index query
     *
     * @param RequestInterface $request
     * @return Select
     */
    public function build(RequestInterface $request);
}
