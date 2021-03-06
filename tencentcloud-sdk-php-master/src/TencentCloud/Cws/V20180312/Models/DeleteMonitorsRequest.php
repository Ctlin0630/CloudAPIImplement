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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getMonitorIds() 获取监控任务ID列表
 * @method void setMonitorIds(array $MonitorIds) 设置监控任务ID列表
 */

/**
 *DeleteMonitors请求参数结构体
 */
class DeleteMonitorsRequest extends AbstractModel
{
    /**
     * @var array 监控任务ID列表
     */
    public $MonitorIds;
    /**
     * @param array $MonitorIds 监控任务ID列表
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
        if (array_key_exists("MonitorIds",$param) and $param["MonitorIds"] !== null) {
            $this->MonitorIds = [];
            foreach ($param["MonitorIds"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->MonitorIds, $obj);
            }
        }
    }
}
