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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method array getDeviceNames() 获取设备名称列表，允许最多一次100台
 * @method void setDeviceNames(array $DeviceNames) 设置设备名称列表，允许最多一次100台
 * @method string getStartTime() 获取查询开始时间
 * @method void setStartTime(string $StartTime) 设置查询开始时间
 * @method string getEndTime() 获取查询结束时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间
 * @method array getSize() 获取查询数据量
 * @method void setSize(array $Size) 设置查询数据量
 * @method string getOrder() 获取时间排序（desc/asc）
 * @method void setOrder(string $Order) 设置时间排序（desc/asc）
 * @method string getScrollId() 获取查询游标
 * @method void setScrollId(string $ScrollId) 设置查询游标
 */

/**
 *GetDataHistory请求参数结构体
 */
class GetDataHistoryRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var array 设备名称列表，允许最多一次100台
     */
    public $DeviceNames;

    /**
     * @var string 查询开始时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间
     */
    public $EndTime;

    /**
     * @var array 查询数据量
     */
    public $Size;

    /**
     * @var string 时间排序（desc/asc）
     */
    public $Order;

    /**
     * @var string 查询游标
     */
    public $ScrollId;
    /**
     * @param string $ProductId 产品Id
     * @param array $DeviceNames 设备名称列表，允许最多一次100台
     * @param string $StartTime 查询开始时间
     * @param string $EndTime 查询结束时间
     * @param array $Size 查询数据量
     * @param string $Order 时间排序（desc/asc）
     * @param string $ScrollId 查询游标
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = [];
            foreach ($param["Size"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->Size, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ScrollId",$param) and $param["ScrollId"] !== null) {
            $this->ScrollId = $param["ScrollId"];
        }
    }
}
