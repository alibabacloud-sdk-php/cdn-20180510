<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPathDataResponseBody\pathDataPerInterval;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $acc;

    /**
     * @var int
     */
    public $traffic;
    protected $_name = [
        'path'    => 'Path',
        'time'    => 'Time',
        'acc'     => 'Acc',
        'traffic' => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
