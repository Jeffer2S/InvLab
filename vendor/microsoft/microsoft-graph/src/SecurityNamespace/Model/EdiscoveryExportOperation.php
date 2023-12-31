<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryExportOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

/**
* EdiscoveryExportOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryExportOperation extends CaseOperation
{
    /**
    * Gets the description
    * The description provided for the export.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description provided for the export.
    *
    * @param string $val The description
    *
    * @return EdiscoveryExportOperation
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }


     /**
     * Gets the exportFileMetadata
     *
     * @return array|null The exportFileMetadata
     */
    public function getExportFileMetadata()
    {
        if (array_key_exists("exportFileMetadata", $this->_propDict)) {
           return $this->_propDict["exportFileMetadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exportFileMetadata
    *
    * @param ExportFileMetadata[] $val The exportFileMetadata
    *
    * @return EdiscoveryExportOperation
    */
    public function setExportFileMetadata($val)
    {
        $this->_propDict["exportFileMetadata"] = $val;
        return $this;
    }

    /**
    * Gets the exportOptions
    * The options provided for the export. For more information, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement,  tags.
    *
    * @return ExportOptions|null The exportOptions
    */
    public function getExportOptions()
    {
        if (array_key_exists("exportOptions", $this->_propDict)) {
            if (is_a($this->_propDict["exportOptions"], "\Microsoft\Graph\SecurityNamespace\Model\ExportOptions") || is_null($this->_propDict["exportOptions"])) {
                return $this->_propDict["exportOptions"];
            } else {
                $this->_propDict["exportOptions"] = new ExportOptions($this->_propDict["exportOptions"]);
                return $this->_propDict["exportOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the exportOptions
    * The options provided for the export. For more information, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement,  tags.
    *
    * @param ExportOptions $val The exportOptions
    *
    * @return EdiscoveryExportOperation
    */
    public function setExportOptions($val)
    {
        $this->_propDict["exportOptions"] = $val;
        return $this;
    }

    /**
    * Gets the exportStructure
    * The options that specify the structure of the export. For more information, see reviewSet: export. Possible values are: none, directory, pst.
    *
    * @return ExportFileStructure|null The exportStructure
    */
    public function getExportStructure()
    {
        if (array_key_exists("exportStructure", $this->_propDict)) {
            if (is_a($this->_propDict["exportStructure"], "\Microsoft\Graph\SecurityNamespace\Model\ExportFileStructure") || is_null($this->_propDict["exportStructure"])) {
                return $this->_propDict["exportStructure"];
            } else {
                $this->_propDict["exportStructure"] = new ExportFileStructure($this->_propDict["exportStructure"]);
                return $this->_propDict["exportStructure"];
            }
        }
        return null;
    }

    /**
    * Sets the exportStructure
    * The options that specify the structure of the export. For more information, see reviewSet: export. Possible values are: none, directory, pst.
    *
    * @param ExportFileStructure $val The exportStructure
    *
    * @return EdiscoveryExportOperation
    */
    public function setExportStructure($val)
    {
        $this->_propDict["exportStructure"] = $val;
        return $this;
    }

    /**
    * Gets the outputName
    * The name provided for the export.
    *
    * @return string|null The outputName
    */
    public function getOutputName()
    {
        if (array_key_exists("outputName", $this->_propDict)) {
            return $this->_propDict["outputName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputName
    * The name provided for the export.
    *
    * @param string $val The outputName
    *
    * @return EdiscoveryExportOperation
    */
    public function setOutputName($val)
    {
        $this->_propDict["outputName"] = $val;
        return $this;
    }

    /**
    * Gets the reviewSet
    * Review set from where documents are exported.
    *
    * @return EdiscoveryReviewSet|null The reviewSet
    */
    public function getReviewSet()
    {
        if (array_key_exists("reviewSet", $this->_propDict)) {
            if (is_a($this->_propDict["reviewSet"], "\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryReviewSet") || is_null($this->_propDict["reviewSet"])) {
                return $this->_propDict["reviewSet"];
            } else {
                $this->_propDict["reviewSet"] = new EdiscoveryReviewSet($this->_propDict["reviewSet"]);
                return $this->_propDict["reviewSet"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewSet
    * Review set from where documents are exported.
    *
    * @param EdiscoveryReviewSet $val The reviewSet
    *
    * @return EdiscoveryExportOperation
    */
    public function setReviewSet($val)
    {
        $this->_propDict["reviewSet"] = $val;
        return $this;
    }

    /**
    * Gets the reviewSetQuery
    * The review set query that is used to filter the documents for export.
    *
    * @return EdiscoveryReviewSetQuery|null The reviewSetQuery
    */
    public function getReviewSetQuery()
    {
        if (array_key_exists("reviewSetQuery", $this->_propDict)) {
            if (is_a($this->_propDict["reviewSetQuery"], "\Microsoft\Graph\SecurityNamespace\Model\EdiscoveryReviewSetQuery") || is_null($this->_propDict["reviewSetQuery"])) {
                return $this->_propDict["reviewSetQuery"];
            } else {
                $this->_propDict["reviewSetQuery"] = new EdiscoveryReviewSetQuery($this->_propDict["reviewSetQuery"]);
                return $this->_propDict["reviewSetQuery"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewSetQuery
    * The review set query that is used to filter the documents for export.
    *
    * @param EdiscoveryReviewSetQuery $val The reviewSetQuery
    *
    * @return EdiscoveryExportOperation
    */
    public function setReviewSetQuery($val)
    {
        $this->_propDict["reviewSetQuery"] = $val;
        return $this;
    }

}
