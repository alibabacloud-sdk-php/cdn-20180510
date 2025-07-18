<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnFullDomainsBlockIPConfigResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * The value of Code is not 0 in the following scenarios:
     *
     *   The format of the IP address is invalid.
     *   The number of IP addresses exceeds the upper limit.
     *   Other abnormal scenarios.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned results. If the operation is successful, URLs of OSS objects are returned. If the operation fails, an error message is returned.
     *
     * @example http://xxxx-api.oss-cn-hangzhou.aliyuncs.com/blocklist%2Fxxxxxxxxxxxx.txt?Expires=1682663947&OSSAccessKeyId=xxxxxxxxxx&Signature=xxxxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 95994621-8382-464B-8762-C708E73568D1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnFullDomainsBlockIPConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
