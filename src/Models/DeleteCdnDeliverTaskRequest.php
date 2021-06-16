<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DeleteCdnDeliverTaskRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $deliverId;
    protected $_name = [
        'ownerId'   => 'OwnerId',
        'deliverId' => 'DeliverId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCdnDeliverTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }

        return $model;
    }
}
