<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainNamesOfVersionResponseBody\contents;
use AlibabaCloud\Tea\Model;

class DescribeDomainNamesOfVersionResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var contents[]
     */
    public $contents;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'contents'   => 'Contents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainNamesOfVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
