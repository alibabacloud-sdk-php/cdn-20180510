<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserResourcePackageResponseBody\resourcePackageInfos;

use AlibabaCloud\Tea\Model;

class resourcePackageInfo extends Model
{
    /**
     * @description The ID of the resource plan.
     *
     * @example cdnflowbag
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The remaining quota of the resource plan.
     *
     *   For a data transfer plan, the quota is measured in bytes.
     *   For a request resource plan, the quota is measured in the number of requests.
     *
     * @example 10995089554629
     *
     * @var string
     */
    public $currCapacity;

    /**
     * @description The name of the resource plan.
     *
     * @example CDN data transfer plan (Chinese mainland)
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The expiration time.
     *
     * @example 2018-07-01T08:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The total quota of the resource plan.
     *
     *   For a data transfer plan, the quota is measured in bytes.
     *   For a request resource plan, the quota is measured in the number of requests.
     *
     * @example 536870912000
     *
     * @var string
     */
    public $initCapacity;

    /**
     * @description The ID of the instance
     *
     * @example FP-ilttxc23a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The effective time.
     *
     * @example 2017-12-05T19:10:58Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the resource plan. Valid values:
     *
     *   **valid**: valid
     *   **closed**: expired
     *
     * @example valid
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the template.
     *
     * @example CDN data transfer plan
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'currCapacity'  => 'CurrCapacity',
        'displayName'   => 'DisplayName',
        'endTime'       => 'EndTime',
        'initCapacity'  => 'InitCapacity',
        'instanceId'    => 'InstanceId',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'templateName'  => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePackageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
