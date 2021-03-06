<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetWaitingRoomConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $waitUri;

    /**
     * @var int
     */
    public $allowPct;

    /**
     * @var int
     */
    public $maxTimeWait;

    /**
     * @var int
     */
    public $gapTime;

    /**
     * @var string
     */
    public $waitUrl;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'domainName'  => 'DomainName',
        'waitUri'     => 'WaitUri',
        'allowPct'    => 'AllowPct',
        'maxTimeWait' => 'MaxTimeWait',
        'gapTime'     => 'GapTime',
        'waitUrl'     => 'WaitUrl',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->waitUri) {
            $res['WaitUri'] = $this->waitUri;
        }
        if (null !== $this->allowPct) {
            $res['AllowPct'] = $this->allowPct;
        }
        if (null !== $this->maxTimeWait) {
            $res['MaxTimeWait'] = $this->maxTimeWait;
        }
        if (null !== $this->gapTime) {
            $res['GapTime'] = $this->gapTime;
        }
        if (null !== $this->waitUrl) {
            $res['WaitUrl'] = $this->waitUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetWaitingRoomConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['WaitUri'])) {
            $model->waitUri = $map['WaitUri'];
        }
        if (isset($map['AllowPct'])) {
            $model->allowPct = $map['AllowPct'];
        }
        if (isset($map['MaxTimeWait'])) {
            $model->maxTimeWait = $map['MaxTimeWait'];
        }
        if (isset($map['GapTime'])) {
            $model->gapTime = $map['GapTime'];
        }
        if (isset($map['WaitUrl'])) {
            $model->waitUrl = $map['WaitUrl'];
        }

        return $model;
    }
}
