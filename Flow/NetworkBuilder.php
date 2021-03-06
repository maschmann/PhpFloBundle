<?php
/*
 * This file is part of the phpflo\phpflo-bundle package.
 *
 * (c) Marc Aschmann <maschmann@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpFlo\PhpFloBundle\Flow;

use PhpFlo\PhpFloBundle\Common\BuilderInterface;
use PhpFlo\Builder\ComponentDiFinder;
use PhpFlo\Common\ComponentBuilderInterface;
use PhpFlo\Common\ComponentRegistryInterface;
use PhpFlo\Graph;
use PhpFlo\Network;

/**
 * Class Builder
 *
 * @package PhpFlo\PhpFloBundle\Flow
 * @author Marc Aschmann <maschmann@gmail.com>
 */
class NetworkBuilder extends AbstractNetworkBuilder implements BuilderInterface
{
    /**
     * @var string
     */
    protected $root;

    /**
     * @var ComponentBuilderInterface
     */
    protected $builder;

    /**
     * Builder constructor.
     *
     * @param ComponentRegistryInterface $registry
     * @param string $rootDir
     */
    public function __construct(ComponentRegistryInterface $registry, $rootDir)
    {
        $this->builder = new ComponentDiFinder($registry);
        $this->root = $rootDir . '/../app/config';
    }
}
