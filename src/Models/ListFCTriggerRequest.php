<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ListFCTriggerRequest extends Model
{
    /**
     * @description The name of the event for which the Function Compute trigger is set. You can specify only one name.
     *
     * @example LogFileCreated
     *
     * @var string
     */
    public $eventMetaName;

    /**
     * @description The version number of the event. You can specify only one version number.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $eventMetaVersion;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'eventMetaName'    => 'EventMetaName',
        'eventMetaVersion' => 'EventMetaVersion',
        'ownerId'          => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventMetaName) {
            $res['EventMetaName'] = $this->eventMetaName;
        }
        if (null !== $this->eventMetaVersion) {
            $res['EventMetaVersion'] = $this->eventMetaVersion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFCTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventMetaName'])) {
            $model->eventMetaName = $map['EventMetaName'];
        }
        if (isset($map['EventMetaVersion'])) {
            $model->eventMetaVersion = $map['EventMetaVersion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
