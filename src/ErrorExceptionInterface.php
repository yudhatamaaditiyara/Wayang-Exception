<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace Wayang\Exception;

interface ErrorExceptionInterface extends ExceptionInterface
{
  public function getSeverity();
}