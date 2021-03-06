<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDBInstanceId() 获取实例ID，形如postgres-6fego161
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-6fego161
 * @method integer getPeriod() 获取续费多少个月
 * @method void setPeriod(integer $Period) 设置续费多少个月
 * @method integer getAutoVoucher() 获取是否自动使用代金券,1是,0否，默认不使用
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券,1是,0否，默认不使用
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券
 */

/**
 *RenewInstance请求参数结构体
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-6fego161
     */
    public $DBInstanceId;

    /**
     * @var integer 续费多少个月
     */
    public $Period;

    /**
     * @var integer 是否自动使用代金券,1是,0否，默认不使用
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券
     */
    public $VoucherIds;
    /**
     * @param string $DBInstanceId 实例ID，形如postgres-6fego161
     * @param integer $Period 续费多少个月
     * @param integer $AutoVoucher 是否自动使用代金券,1是,0否，默认不使用
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
