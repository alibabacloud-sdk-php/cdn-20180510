<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetDomainServerCertificateRequest extends Model
{
    /**
     * @description The name of the SSL certificate. You can specify only one name.
     *
     * @example myCert1
     *
     * @var string
     */
    public $certName;

    /**
     * @description The type of the SSL certificate. Valid values:
     *
     *   **upload**: a user-uploaded SSL certificate.
     *   **cas**: an SSL certificate that is issued by Alibaba Cloud SSL Certificates Service.
     *   **free**: a free SSL certificate.
     *
     * >  If this parameter is set to **cas**, the **PrivateKey** parameter is optional.
     * @example cas
     *
     * @var string
     */
    public $certType;

    /**
     * @description The accelerated domain name for which you want to configure the SSL certificate. The type of request supported by the domain name must be HTTPS.
     *
     * You can specify one domain name in each call.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to check the certificate name for duplicates. If you set the value to 1, the system does not perform the check and overwrites the information of the existing certificate that uses the same name.
     *
     * @example 1
     *
     * @var string
     */
    public $forceSet;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The private key. Specify the private key only if you want to enable the SSL certificate.
     *
     * @example ----BEGIN RSA PRIVATE KEY-----QswCQ****----END RSA PRIVATE KEY-----
     *
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The content of the SSL certificate. Specify the content of the SSL certificate only if you want to enable the SSL certificate.
     *
     * @example ----BEGIN CERTIFICATE----- MIIFz****-----END CERTIFICATE-----
     *
     * @var string
     */
    public $serverCertificate;

    /**
     * @description Specifies whether to enable the SSL certificate. Valid values:
     *
     *   **on**: enables the SSL certificate.
     *   **off**: disables the SSL certificate. This is the default value.
     *
     * @example on
     *
     * @var string
     */
    public $serverCertificateStatus;
    protected $_name = [
        'certName'                => 'CertName',
        'certType'                => 'CertType',
        'domainName'              => 'DomainName',
        'forceSet'                => 'ForceSet',
        'ownerId'                 => 'OwnerId',
        'privateKey'              => 'PrivateKey',
        'securityToken'           => 'SecurityToken',
        'serverCertificate'       => 'ServerCertificate',
        'serverCertificateStatus' => 'ServerCertificateStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->forceSet) {
            $res['ForceSet'] = $this->forceSet;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = $this->serverCertificate;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainServerCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ForceSet'])) {
            $model->forceSet = $map['ForceSet'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerCertificate'])) {
            $model->serverCertificate = $map['ServerCertificate'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }

        return $model;
    }
}
