<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EligibilityScheduleInstanceFilterByCurrentUserOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* EligibilityScheduleInstanceFilterByCurrentUserOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EligibilityScheduleInstanceFilterByCurrentUserOptions extends Enum
{
    /**
    * The Enum EligibilityScheduleInstanceFilterByCurrentUserOptions
    */
    const PRINCIPAL = "principal";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
