<?php

namespace Bundle\JMS\Payment\CorePaymentBundle\Plugin;

use Bundle\JMS\Payment\CorePaymentBundle\Model\FinancialTransactionInterface;
use Bundle\JMS\Payment\CorePaymentBundle\Model\PaymentInstructionInterface;
use Bundle\JMS\Payment\CorePaymentBundle\Plugin\Exception\FunctionNotSupportedException;

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

abstract class Plugin implements PluginInterface
{
    protected $debug;

    public function __construct($isDebug)
    {
        $this->debug = !!$isDebug;
    }

    public function approve(FinancialTransactionInterface $transaction, $retry)
    {
        throw new FunctionNotSupportedException('approve() is not supported by this plugin.');
    }

    public function approveAndDeposit(FinancialTransactionInterface $transaction, $retry)
    {
        throw new FunctionNotSupportedException('approveAndDeposit() is not supported by this plugin.');
    }

    /**
     * {@inheritDoc}
     */
    public function checkPaymentInstruction(PaymentInstructionInterface $instruction)
    {
        throw new FunctionNotSupportedException('checkPaymentInstruction() is not supported by this plugin.');
    }

    public function credit(FinancialTransactionInterface $transaction, $retry)
    {
        throw new FunctionNotSupportedException('credit() is not supported by this plugin.');
    }

    public function deposit(FinancialTransactionInterface $transaction, $retry)
    {
        throw new FunctionNotSupportedException('deposit() is not supported by this plugin.');
    }

    public function isDebug()
    {
        return $this->debug;
    }

    public function reverseApproval(FinancialTransactionInterface $transaction, $retry)
    {
        throw new FunctionNotSupportedException('reverseApproval() is not supported by this plugin.');
    }

    public function reverseCredit(FinancialTransactionInterface $transaction, $retry)
    {
        throw new FunctionNotSupportedException('reverseCredit() is not supported by this plugin.');
    }

    public function reverseDeposit(FinancialTransactionInterface $transaction, $retry)
    {
        throw new FunctionNotSupportedException('reverseDeposit() is not supported by this plugin.');
    }

    public function setDebug($boolean)
    {
        $this->debug = !!$boolean;
    }

    /**
     * {@inheritDoc}
     */
    public function validatePaymentInstruction(PaymentInstructionInterface $instruction)
    {
        throw new FunctionNotSupportedException('validatePaymentInstruction() is not supported by this plugin.');
    }
}