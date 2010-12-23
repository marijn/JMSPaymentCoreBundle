<?php

namespace Bundle\JMS\Payment\CorePaymentBundle\Exception;

/*
 * Copyright 2010 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Base Exception for the PaymentBundle
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Exception extends \Exception
{
    protected $properties = array();

    public function addProperty($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function addProperties(array $properties)
    {
        $this->properties = array_merge($this->properties, $properties);
    }

    public function setProperties(array $properties)
    {
        $this->properties = $properties;
    }

    public function getProperties()
    {
        return $this->properties;
    }
}