<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MonthlyInactiveUsersByApplicationMetric File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* MonthlyInactiveUsersByApplicationMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MonthlyInactiveUsersByApplicationMetric extends InactiveUsersByApplicationMetricBase
{
    /**
    * Gets the inactiveCalendarMonthCount
    *
    * @return int|null The inactiveCalendarMonthCount
    */
    public function getInactiveCalendarMonthCount()
    {
        if (array_key_exists("inactiveCalendarMonthCount", $this->_propDict)) {
            return $this->_propDict["inactiveCalendarMonthCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactiveCalendarMonthCount
    *
    * @param int $val The inactiveCalendarMonthCount
    *
    * @return MonthlyInactiveUsersByApplicationMetric
    */
    public function setInactiveCalendarMonthCount($val)
    {
        $this->_propDict["inactiveCalendarMonthCount"] = intval($val);
        return $this;
    }

}
