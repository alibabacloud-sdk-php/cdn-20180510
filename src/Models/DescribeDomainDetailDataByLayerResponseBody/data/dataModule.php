<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainDetailDataByLayerResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var int
     */
    public $traf;

    /**
     * @var float
     */
    public $qps;

    /**
     * @var float
     */
    public $ipv6Qps;

    /**
     * @var float
     */
    public $ipv6Bps;

    /**
     * @var int
     */
    public $acc;

    /**
     * @var int
     */
    public $ipv6Traf;

    /**
     * @var int
     */
    public $ipv6Acc;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $httpCode;

    /**
     * @var float
     */
    public $bps;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'traf'       => 'Traf',
        'qps'        => 'Qps',
        'ipv6Qps'    => 'Ipv6Qps',
        'ipv6Bps'    => 'Ipv6Bps',
        'acc'        => 'Acc',
        'ipv6Traf'   => 'Ipv6Traf',
        'ipv6Acc'    => 'Ipv6Acc',
        'timeStamp'  => 'TimeStamp',
        'httpCode'   => 'HttpCode',
        'bps'        => 'Bps',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traf) {
            $res['Traf'] = $this->traf;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->ipv6Qps) {
            $res['Ipv6Qps'] = $this->ipv6Qps;
        }
        if (null !== $this->ipv6Bps) {
            $res['Ipv6Bps'] = $this->ipv6Bps;
        }
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->ipv6Traf) {
            $res['Ipv6Traf'] = $this->ipv6Traf;
        }
        if (null !== $this->ipv6Acc) {
            $res['Ipv6Acc'] = $this->ipv6Acc;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Traf'])) {
            $model->traf = $map['Traf'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Ipv6Qps'])) {
            $model->ipv6Qps = $map['Ipv6Qps'];
        }
        if (isset($map['Ipv6Bps'])) {
            $model->ipv6Bps = $map['Ipv6Bps'];
        }
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['Ipv6Traf'])) {
            $model->ipv6Traf = $map['Ipv6Traf'];
        }
        if (isset($map['Ipv6Acc'])) {
            $model->ipv6Acc = $map['Ipv6Acc'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
