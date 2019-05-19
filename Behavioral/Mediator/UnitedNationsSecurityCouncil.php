<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/19
 * Time: 21:52
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Mediator;


/**
 * 联合国安理会
 * @package Patterns\Behavioral\Mediator
 */
class UnitedNationsSecurityCouncil extends Mediator
{
    /**
     * 国家1
     *
     * @var \Patterns\Behavioral\Mediator\USA
     */
    private $colleague1;

    /**
     * 国家2
     *
     * @var \Patterns\Behavioral\Mediator\China
     */
    private $colleague2;

    /**
     * 设置国家1
     *
     * @param \Patterns\Behavioral\Mediator\USA $colleague1
     */
    public function setColleague1(USA $colleague1): void
    {
        $this->colleague1 = $colleague1;
    }

    /**
     * 设置国家2
     *
     * @param \Patterns\Behavioral\Mediator\China $colleague2
     */
    public function setColleague2(China $colleague2): void
    {
        $this->colleague2 = $colleague2;
    }

    /**
     * @return \Patterns\Behavioral\Mediator\USA
     */
    public function getColleague1(): USA
    {
        return $this->colleague1;
    }

    /**
     * @return \Patterns\Behavioral\Mediator\China
     */
    public function getColleague2(): China
    {
        return $this->colleague2;
    }

    /**
     * 声明
     *
     * @param string                                $message
     * @param \Patterns\Behavioral\Mediator\Country $colleague
     * @return string
     */
    public function declare(string $message, Country $colleague): string
    {
        if ($colleague instanceof China) {
            return $this->colleague1->getMessage($message);
        } else {
            return $this->colleague2->getMessage($message);
        }
    }
}