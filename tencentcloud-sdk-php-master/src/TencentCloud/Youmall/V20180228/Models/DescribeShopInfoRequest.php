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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getOffset() 获取偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method void setOffset(integer $Offset) 设置偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
 * @method integer getLimit() 获取Limit:每页的数据项，最大100，超过100会被强制指定为100
 * @method void setLimit(integer $Limit) 设置Limit:每页的数据项，最大100，超过100会被强制指定为100
 */

/**
 *DescribeShopInfo请求参数结构体
 */
class DescribeShopInfoRequest extends AbstractModel
{
    /**
     * @var integer 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     */
    public $Offset;

    /**
     * @var integer Limit:每页的数据项，最大100，超过100会被强制指定为100
     */
    public $Limit;
    /**
     * @param integer $Offset 偏移量：分页控制参数，第一页传0，第n页Offset=(n-1)*Limit
     * @param integer $Limit Limit:每页的数据项，最大100，超过100会被强制指定为100
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
