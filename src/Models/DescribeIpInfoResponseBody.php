<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $cdnIp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionEname;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $ispEname;

    /**
     * @var string
     */
    public $ISP;
    protected $_name = [
        'cdnIp'       => 'CdnIp',
        'requestId'   => 'RequestId',
        'regionEname' => 'RegionEname',
        'region'      => 'Region',
        'ispEname'    => 'IspEname',
        'ISP'         => 'ISP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnIp) {
            $res['CdnIp'] = $this->cdnIp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionEname) {
            $res['RegionEname'] = $this->regionEname;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->ispEname) {
            $res['IspEname'] = $this->ispEname;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnIp'])) {
            $model->cdnIp = $map['CdnIp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionEname'])) {
            $model->regionEname = $map['RegionEname'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['IspEname'])) {
            $model->ispEname = $map['IspEname'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }

        return $model;
    }
}
