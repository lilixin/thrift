<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements. See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership. The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace Test\Thrift;

require_once __DIR__ . '/../../../../vendor/autoload.php';

use Thrift\ClassLoader\ThriftClassLoader;

/**
 * Class TestValidators
 * @package Test\Thrift
 *
 * @runTestsInSeparateProcesses
 */
class ValidatorTest extends BaseValidatorTest
{
    public function setUp()
    {
        $loader = new ThriftClassLoader();
        $loader->registerDefinition('ThriftTest', __DIR__ . '/../packages/phpv');
        $loader->registerDefinition('TestValidators', __DIR__ . '/../packages/phpv');
        $loader->register();
    }
}