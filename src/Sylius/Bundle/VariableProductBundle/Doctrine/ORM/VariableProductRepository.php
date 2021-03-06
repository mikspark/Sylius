<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\VariableProductBundle\Doctrine\ORM;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * Variable product repository.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class VariableProductRepository extends EntityRepository
{
    /**
     * {@inheritdoc}
     */
    protected function getQueryBuilder()
    {
        return parent::getQueryBuilder()
            ->select('product, option, variant')
            ->leftJoin('product.options', 'option')
            ->leftJoin('product.variants', 'variant')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function getAlias()
    {
        return 'product';
    }
}
