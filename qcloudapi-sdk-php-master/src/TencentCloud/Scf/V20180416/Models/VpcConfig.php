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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getVpcId() 获取私有网络 的 id
 * @method void setVpcId(string $VpcId) 设置私有网络 的 id
 * @method string getSubnetId() 获取子网的 id
 * @method void setSubnetId(string $SubnetId) 设置子网的 id
 */

/**
 *私有网络参数配置
 */
class VpcConfig extends AbstractModel
{
    /**
     * @var string 私有网络 的 id
     */
    public $VpcId;

    /**
     * @var string 子网的 id
     */
    public $SubnetId;
    /**
     * @param string $VpcId 私有网络 的 id
     * @param string $SubnetId 子网的 id
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
