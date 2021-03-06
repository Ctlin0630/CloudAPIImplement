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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStatus() 获取迁移状态
 * @method void setStatus(string $Status) 设置迁移状态
 * @method string getProgress() 获取迁移进度
 * @method void setProgress(string $Progress) 设置迁移进度
 * @method string getUpdateTime() 获取迁移日期
 * @method void setUpdateTime(string $UpdateTime) 设置迁移日期
 */

/**
 *迁移详情列表
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var string 迁移状态
     */
    public $Status;

    /**
     * @var string 迁移进度
     */
    public $Progress;

    /**
     * @var string 迁移日期
     */
    public $UpdateTime;
    /**
     * @param string $Status 迁移状态
     * @param string $Progress 迁移进度
     * @param string $UpdateTime 迁移日期
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
