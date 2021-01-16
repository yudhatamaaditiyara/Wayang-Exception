<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Exception;
use Wayang\Exception\UnknownException;
use Wayang\Exception\ExceptionInterface;

class UnknownExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(UnknownException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfException(){
    $rc = new ReflectionClass(UnknownException::class);
    $this->assertTrue($rc->isSubclassOf(Exception::class));
  }

  public function testMustBeImplemetsExceptionInterface(){
    $rc = new ReflectionClass(UnknownException::class);
    $this->assertTrue($rc->implementsInterface(ExceptionInterface::class));
  }
}