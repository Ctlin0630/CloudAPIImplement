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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getRebateInfoSet() 获取返佣信息列表
 * @method void setRebateInfoSet(array $RebateInfoSet) 设置返佣信息列表
 * @method integer getTotalCount() 获取符合查询条件返佣信息数目
 * @method void setTotalCount(integer $TotalCount) 设置符合查询条件返佣信息数目
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeRebateInfos返回参数结构体
 */
class DescribeRebateInfosResponse extends AbstractModel
{
    /**
     * @var array 返佣信息列表
     */
    public $RebateInfoSet;

    /**
     * @var integer 符合查询条件返佣信息数目
     */
    public $TotalCount;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $RebateInfoSet 返佣信息列表
     * @param integer $TotalCount 符合查询条件返佣信息数目
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("RebateInfoSet",$param) and $param["RebateInfoSet"] !== null) {
            $this->RebateInfoSet = [];
            foreach ($param["RebateInfoSet"] as $key => $value){
                $obj = new RebateInfoElem();
                $obj->deserialize($value);
                array_push($this->RebateInfoSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
