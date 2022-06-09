<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnOrderCommodityCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderCommodityCode;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderCommodityCode' => 'OrderCommodityCode',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderCommodityCode) {
            $res['OrderCommodityCode'] = $this->orderCommodityCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnOrderCommodityCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderCommodityCode'])) {
            $model->orderCommodityCode = $map['OrderCommodityCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}