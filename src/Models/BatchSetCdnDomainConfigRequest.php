<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class BatchSetCdnDomainConfigRequest extends Model
{
    /**
     * @var string
     */
    public $domainNames;

    /**
     * @var string
     */
    public $functions;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'functions' => 'Functions',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }

        if (null !== $this->functions) {
            $res['Functions'] = $this->functions;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }

        if (isset($map['Functions'])) {
            $model->functions = $map['Functions'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
