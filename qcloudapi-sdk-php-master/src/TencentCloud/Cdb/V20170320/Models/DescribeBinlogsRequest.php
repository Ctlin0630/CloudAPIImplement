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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method integer getOffset() 获取偏移量，最小值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，最小值为0。
 * @method integer getLimit() 获取单次请求返回的数量，默认值为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为20，最大值为100。
 */

/**
 *DescribeBinlogs请求参数结构体
 */
class DescribeBinlogsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var integer 偏移量，最小值为0。
     */
    public $Offset;

    /**
     * @var integer 单次请求返回的数量，默认值为20，最大值为100。
     */
    public $Limit;
    /**
     * @param string $InstanceId 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     * @param integer $Offset 偏移量，最小值为0。
     * @param integer $Limit 单次请求返回的数量，默认值为20，最大值为100。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
