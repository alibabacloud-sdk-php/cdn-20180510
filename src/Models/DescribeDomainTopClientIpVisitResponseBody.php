<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody\clientIpList;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopClientIpVisitResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clientIpList[]
     */
    public $clientIpList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'clientIpList' => 'ClientIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clientIpList) {
            $res['ClientIpList'] = [];
            if (null !== $this->clientIpList && \is_array($this->clientIpList)) {
                $n = 0;
                foreach ($this->clientIpList as $item) {
                    $res['ClientIpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainTopClientIpVisitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = [];
                $n                   = 0;
                foreach ($map['ClientIpList'] as $item) {
                    $model->clientIpList[$n++] = null !== $item ? clientIpList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
