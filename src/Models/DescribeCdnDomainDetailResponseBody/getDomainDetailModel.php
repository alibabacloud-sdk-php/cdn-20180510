<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel\sourceModels;
use AlibabaCloud\Tea\Model;

class getDomainDetailModel extends Model
{
    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $httpsCname;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $domainStatus;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $cdnType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var sourceModels
     */
    public $sourceModels;
    protected $_name = [
        'gmtCreated'              => 'GmtCreated',
        'description'             => 'Description',
        'httpsCname'              => 'HttpsCname',
        'resourceGroupId'         => 'ResourceGroupId',
        'serverCertificateStatus' => 'ServerCertificateStatus',
        'scope'                   => 'Scope',
        'domainStatus'            => 'DomainStatus',
        'cname'                   => 'Cname',
        'gmtModified'             => 'GmtModified',
        'cdnType'                 => 'CdnType',
        'domainName'              => 'DomainName',
        'sourceModels'            => 'SourceModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->httpsCname) {
            $res['HttpsCname'] = $this->httpsCname;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->sourceModels) {
            $res['SourceModels'] = null !== $this->sourceModels ? $this->sourceModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getDomainDetailModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HttpsCname'])) {
            $model->httpsCname = $map['HttpsCname'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['SourceModels'])) {
            $model->sourceModels = sourceModels::fromMap($map['SourceModels']);
        }

        return $model;
    }
}
