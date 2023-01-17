<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateCdnSubTaskRequest extends Model
{
    /**
     * @description The domain names to be tracked. Separate multiple domain names with commas (,). You can specify up to 500 domain names. If you want to specify more than 500 domain names, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     *
     * >  If you do not specify a domain name, the custom operations reports are created for all domain names that belong to your Alibaba Cloud account.
     * @example www.example1.com,www.example2.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The IDs of the metrics that you want to include in the report. Separate multiple IDs with commas (,). Valid values:
     *
     *   **1**: frequently requested URLs (ranked by the number of requests)
     *   **3**: frequently requested URLs (ranked by the amount of network traffic)
     *   **5**: frequently used referer headers (ranked by the number of requests)
     *   **7**: frequently used referer headers (ranked by the amount of network traffic)
     *   **9**: frequently requested back-to-origin URLs (ranked by the number of requests)
     *   **11**: frequently requested back-to-origin URLs (ranked by the amount of network traffic)
     *   **13**: top client IP addresses (ranked by the number of requests)
     *   **15**: top client IP addresses (ranked by the amount of network traffic)
     *   **17**: domain names ranked by the amount of network traffic
     *   **19**: page views and unique visitors
     *   **21**: regions from which requests are initiated
     *   **23**: distribution of Internet service providers (ISPs)
     *
     * @example 1,3,5
     *
     * @var string
     */
    public $reportIds;
    protected $_name = [
        'domainName' => 'DomainName',
        'reportIds'  => 'ReportIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCdnSubTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ReportIds'])) {
            $model->reportIds = $map['ReportIds'];
        }

        return $model;
    }
}
