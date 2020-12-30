<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class AddCdnDomainRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $cdnType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sources;

    /**
     * @var string
     */
    public $checkUrl;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'ownerId'         => 'OwnerId',
        'ownerAccount'    => 'OwnerAccount',
        'securityToken'   => 'SecurityToken',
        'cdnType'         => 'CdnType',
        'domainName'      => 'DomainName',
        'resourceGroupId' => 'ResourceGroupId',
        'sources'         => 'Sources',
        'checkUrl'        => 'CheckUrl',
        'scope'           => 'Scope',
        'topLevelDomain'  => 'TopLevelDomain',
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->checkUrl) {
            $res['CheckUrl'] = $this->checkUrl;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->topLevelDomain) {
            $res['TopLevelDomain'] = $this->topLevelDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCdnDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }
        if (isset($map['CheckUrl'])) {
            $model->checkUrl = $map['CheckUrl'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['TopLevelDomain'])) {
            $model->topLevelDomain = $map['TopLevelDomain'];
        }

        return $model;
    }
}
