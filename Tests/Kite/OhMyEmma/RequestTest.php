<?php

namespace Kite\OhMyEmma;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-02 at 20:40:56.
 */
class RequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Request
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Request;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kite\OhMyEmma\Request::_construct
     */
    public function test_construct()
    {
        $request = new Request(
            '111',
            'aaa',
            'bbb',
            'http://httpbin.org/'
        );
        $this->assertInstanceOf('Kite\OhMyEmma\Request', $request);
        $this->assertEmpty($request->responseCode);
        $this->assertEmpty($request->response);
    }

    /**
     * @covers Kite\OhMyEmma\Request::makeRequest
     * @todo   Implement testMakeRequest().
     */
    public function testMakeRequest()
    {
        $request = new Request(
            '111',
            'aaa',
            'bbb',
            'http://httpbin.org/'
        );
        $request->makeRequest('');
        $this->assertNotEmpty($request->responseCode);
        $this->assertNotEmpty($request->response);
    }
}