<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class RefreshObjectCachesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $refreshTaskId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'refreshTaskId' => 'RefreshTaskId',
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
        if (null !== $this->refreshTaskId) {
            $res['RefreshTaskId'] = $this->refreshTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshObjectCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RefreshTaskId'])) {
            $model->refreshTaskId = $map['RefreshTaskId'];
        }

        return $model;
    }
}
