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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取过滤字段，可选值 - Zone，VpcId，InstanceName
 * @method void setName(string $Name) 设置过滤字段，可选值 - Zone，VpcId，InstanceName
 * @method array getValueList() 获取过滤值列表
 * @method void setValueList(array $ValueList) 设置过滤值列表
 */

/**
 *过滤条件
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤字段，可选值 - Zone，VpcId，InstanceName
     */
    public $Name;

    /**
     * @var array 过滤值列表
     */
    public $ValueList;
    /**
     * @param string $Name 过滤字段，可选值 - Zone，VpcId，InstanceName
     * @param array $ValueList 过滤值列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = $param["ValueList"];
        }
    }
}
