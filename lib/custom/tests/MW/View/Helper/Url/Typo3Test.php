<?php

/**
 * Test class for MW_View_Helper_Url_Typo3.
 *
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2011
 * @license LGPLv3, http://www.gnu.org/licenses/lgpl.html
 */
class MW_View_Helper_Url_Typo3Test extends MW_Unittest_Testcase
{
	protected $_object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @access protected
	 */
	protected function setUp()
	{
		$view = new MW_View_Default();
		$mock = new Tx_Extbase_MVC_Web_Routing_UriBuilder();

		$this->_object = new MW_View_Helper_Url_Typo3( $view, $mock );
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @access protected
	 */
	protected function tearDown()
	{
		unset($this->_object);
	}

	public function testTransform()
	{
		$this->assertEquals( '', $this->_object->transform() );
	}

	public function testTransformAbsolute()
	{
		$config = array( 'absoluteUri' => 1 );
		$this->assertEquals( '', $this->_object->transform( null, null, null, array(), array(), $config ) );
	}

	public function testTransformNocache()
	{
		$config = array( 'nocache' => 1 );
		$this->assertEquals( '', $this->_object->transform( null, null, null, array(), array(), $config ) );
	}

	public function testTransformChash()
	{
		$config = array( 'chash' => 1 );
		$this->assertEquals( '', $this->_object->transform( null, null, null, array(), array(), $config ) );
	}

	public function testTransformType()
	{
		$config = array( 'type' => 123 );
		$this->assertEquals( '', $this->_object->transform( null, null, null, array(), array(), $config ) );
	}

	public function testTransformFormat()
	{
		$config = array( 'format' => 'xml' );
		$this->assertEquals( '', $this->_object->transform( null, null, null, array(), array(), $config ) );
	}

	public function testTransformEID()
	{
		$config = array( 'eID' => 123 );
		$this->assertEquals( '', $this->_object->transform( null, null, null, array(), array(), $config ) );
	}

	public function testTransformParams()
	{
		$params = array( 'test' => 'my/value' );
		$this->assertEquals( '', $this->_object->transform( null, null, null, $params ) );
	}
}



class Tx_Extbase_MVC_Web_Routing_UriBuilder
{
	public function uriFor( $action, array $params, $controller )
	{
		return '';
	}

	public function reset()
	{
		return $this;
	}

	public function setTargetPageUid( $target )
	{
		return $this;
	}

	public function setTargetPageType( $pageType )
	{
		return $this;
	}

	public function setCreateAbsoluteUri( $absoluteUri )
	{
		return $this;
	}

	public function setArguments( $additional )
	{
		return $this;
	}

	public function setUseCacheHash( $chash )
	{
		return $this;
	}

	public function setNoCache( $nocache )
	{
		return $this;
	}

	public function setFormat( $format )
	{
		return $this;
	}

	public function setSection( $trailing )
	{
		return $this;
	}
}
