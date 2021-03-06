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
 * @method string getReplicationMode() 获取从库复制方式，可能的返回值：aysnc-异步，semisync-半同步
 * @method void setReplicationMode(string $ReplicationMode) 设置从库复制方式，可能的返回值：aysnc-异步，semisync-半同步
 * @method string getZone() 获取从库可用区的正式名称，如ap-shanghai-1
 * @method void setZone(string $Zone) 设置从库可用区的正式名称，如ap-shanghai-1
 */

/**
 *从库的配置信息
 */
class SlaveConfig extends AbstractModel
{
    /**
     * @var string 从库复制方式，可能的返回值：aysnc-异步，semisync-半同步
     */
    public $ReplicationMode;

    /**
     * @var string 从库可用区的正式名称，如ap-shanghai-1
     */
    public $Zone;
    /**
     * @param string $ReplicationMode 从库复制方式，可能的返回值：aysnc-异步，semisync-半同步
     * @param string $Zone 从库可用区的正式名称，如ap-shanghai-1
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
        if (array_key_exists("ReplicationMode",$param) and $param["ReplicationMode"] !== null) {
            $this->ReplicationMode = $param["ReplicationMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
