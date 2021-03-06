<?php
/**
 * File containing the StorageRepositoryProviderTest class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */

namespace eZ\Bundle\EzPublishCoreBundle\Tests\ApiLoader;

use eZ\Bundle\EzPublishCoreBundle\ApiLoader\StorageRepositoryProvider;
use PHPUnit_Framework_TestCase;

class StorageRepositoryProviderTest extends PHPUnit_Framework_TestCase
{
    public function testGetRepositoryConfigSpecifiedRepository()
    {
        $configResolver = $this->getConfigResolverMock();
        $repositoryAlias = 'main';
        $repositoryConfig = array(
            'engine' => 'foo',
            'connection' => 'some_connection'
        );
        $repositories = array(
            $repositoryAlias => $repositoryConfig,
            'another' => array(
                'engine' => 'bar'
            )
        );
        $provider = new StorageRepositoryProvider( $configResolver, $repositories );

        $configResolver
            ->expects( $this->once() )
            ->method( 'getParameter' )
            ->with( 'repository' )
            ->will( $this->returnValue( $repositoryAlias ) );

        $this->assertSame(
            array( 'alias' => $repositoryAlias ) + $repositoryConfig,
            $provider->getRepositoryConfig()
        );
    }

    public function testGetRepositoryConfigNotSpecifiedRepository()
    {
        $configResolver = $this->getConfigResolverMock();
        $repositoryAlias = 'main';
        $repositoryConfig = array(
            'engine' => 'foo',
            'connection' => 'some_connection'
        );
        $repositories = array(
            $repositoryAlias => $repositoryConfig,
            'another' => array(
                'engine' => 'bar'
            )
        );
        $provider = new StorageRepositoryProvider( $configResolver, $repositories );

        $configResolver
            ->expects( $this->once() )
            ->method( 'getParameter' )
            ->with( 'repository' )
            ->will( $this->returnValue( null ) );

        $this->assertSame(
            array( 'alias' => $repositoryAlias ) + $repositoryConfig,
            $provider->getRepositoryConfig()
        );
    }

    /**
     * @expectedException \eZ\Bundle\EzPublishCoreBundle\ApiLoader\Exception\InvalidRepositoryException
     */
    public function testGetRepositoryConfigUndefinedRepository()
    {
        $configResolver = $this->getConfigResolverMock();
        $repositories = array(
            'main' => array(
                'engine' => 'foo'
            ),
            'another' => array(
                'engine' => 'bar'
            )
        );

        $configResolver
            ->expects( $this->once() )
            ->method( 'getParameter' )
            ->with( 'repository' )
            ->will( $this->returnValue( 'undefined_repository' ) );

        $provider = new StorageRepositoryProvider( $configResolver, $repositories );
        $provider->getRepositoryConfig();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|\eZ\Publish\Core\MVC\ConfigResolverInterface
     */
    protected function getConfigResolverMock()
    {
        return $this->getMock( 'eZ\Publish\Core\MVC\ConfigResolverInterface' );
    }
}
