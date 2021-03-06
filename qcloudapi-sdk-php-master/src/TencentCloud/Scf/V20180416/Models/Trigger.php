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
 * @method string getModTime() 获取触发器最后修改时间
 * @method void setModTime(string $ModTime) 设置触发器最后修改时间
 * @method string getType() 获取触发器类型
 * @method void setType(string $Type) 设置触发器类型
 * @method string getTriggerDesc() 获取触发器详细配置
 * @method void setTriggerDesc(string $TriggerDesc) 设置触发器详细配置
 * @method string getTriggerName() 获取触发器名称
 * @method void setTriggerName(string $TriggerName) 设置触发器名称
 * @method string getAddTime() 获取触发器创建时间
 * @method void setAddTime(string $AddTime) 设置触发器创建时间
 */

/**
 *触发器类型
 */
class Trigger extends AbstractModel
{
    /**
     * @var string 触发器最后修改时间
     */
    public $ModTime;

    /**
     * @var string 触发器类型
     */
    public $Type;

    /**
     * @var string 触发器详细配置
     */
    public $TriggerDesc;

    /**
     * @var string 触发器名称
     */
    public $TriggerName;

    /**
     * @var string 触发器创建时间
     */
    public $AddTime;
    /**
     * @param string $ModTime 触发器最后修改时间
     * @param string $Type 触发器类型
     * @param string $TriggerDesc 触发器详细配置
     * @param string $TriggerName 触发器名称
     * @param string $AddTime 触发器创建时间
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }
    }
}
