<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCcActivityLogResponseBody\activityLog;
use AlibabaCloud\Tea\Model;

class DescribeDomainCcActivityLogResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var activityLog[]
     */
    public $activityLog;
    protected $_name = [
        'pageIndex'   => 'PageIndex',
        'requestId'   => 'RequestId',
        'pageSize'    => 'PageSize',
        'total'       => 'Total',
        'activityLog' => 'ActivityLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->activityLog) {
            $res['ActivityLog'] = [];
            if (null !== $this->activityLog && \is_array($this->activityLog)) {
                $n = 0;
                foreach ($this->activityLog as $item) {
                    $res['ActivityLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainCcActivityLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ActivityLog'])) {
            if (!empty($map['ActivityLog'])) {
                $model->activityLog = [];
                $n                  = 0;
                foreach ($map['ActivityLog'] as $item) {
                    $model->activityLog[$n++] = null !== $item ? activityLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
