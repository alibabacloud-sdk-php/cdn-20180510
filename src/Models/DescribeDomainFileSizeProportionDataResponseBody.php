<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainFileSizeProportionDataResponseBody\fileSizeProportionDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainFileSizeProportionDataResponseBody extends Model
{
    /**
     * @description The time interval between the data entries returned. Unit: seconds.
     *
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2019-12-31T02:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The proportions of files in different sizes.
     *
     * @var fileSizeProportionDataInterval
     */
    public $fileSizeProportionDataInterval;

    /**
     * @description The ID of the request.
     *
     * @example 23ACE7E2-2302-42E3-98F8-E5E697FD86C3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range that was queried.
     *
     * @example 2019-12-31T01:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'                   => 'DataInterval',
        'domainName'                     => 'DomainName',
        'endTime'                        => 'EndTime',
        'fileSizeProportionDataInterval' => 'FileSizeProportionDataInterval',
        'requestId'                      => 'RequestId',
        'startTime'                      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileSizeProportionDataInterval) {
            $res['FileSizeProportionDataInterval'] = null !== $this->fileSizeProportionDataInterval ? $this->fileSizeProportionDataInterval->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainFileSizeProportionDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileSizeProportionDataInterval'])) {
            $model->fileSizeProportionDataInterval = fileSizeProportionDataInterval::fromMap($map['FileSizeProportionDataInterval']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
