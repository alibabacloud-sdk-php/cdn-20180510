<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class RefreshObjectCachesResponseBody extends Model
{
    /**
     * @var string
     */
    public $refreshTaskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'refreshTaskId' => 'RefreshTaskId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refreshTaskId) {
            $res['RefreshTaskId'] = $this->refreshTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RefreshTaskId'])) {
            $model->refreshTaskId = $map['RefreshTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
