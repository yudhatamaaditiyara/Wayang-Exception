<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\ErrorException;
use Wayang\Exception\ErrorExceptionInterface;

class ErrorExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(ErrorException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfErrorException(){
    $rc = new ReflectionClass(ErrorException::class);
    $this->assertTrue($rc->isSubclassOf(\ErrorException::class));
  }

  public function testMustBeImplemetsErrorExceptionInterface(){
    $rc = new ReflectionClass(ErrorException::class);
    $this->assertTrue($rc->implementsInterface(ErrorExceptionInterface::class));
  }
}