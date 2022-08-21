<?php
/**
 * This file is part of the Payroll Calculator Package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */
// ------------------------------------------------------------------------

namespace IrwanRuntuwene\IndonesiaPayrollCalculator\DataStructures\Employee;

// ------------------------------------------------------------------------

/**
 * Class Earnings
 * @package IrwanRuntuwene\IndonesiaPayrollCalculator\DataStructures\Employee
 */
class Earnings
{
    /**
     * Earnings::$base
     *
     * @var int
     */
    public $base = 0;

    /**
     * Earnings::$fixedAllowance
     *
     * @var int
     */
    public $fixedAllowance = 0;

    /**
     * Earnings::$overtime
     *
     * @var int
     */
    public $overtime = 0;

    /**
     * Earnings::$splitShifts
     *
     * @var int
     */
    public $splitShifts = 0;

    /**
     * Earnings::$holidayAllowance
     *
     * @var int
     */
    public $holidayAllowance = 0;
}