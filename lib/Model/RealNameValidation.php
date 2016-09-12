<?php
/**
 * RealNameValidation
 *
 * PHP version 5
 *
 * @category Class
 * @package  GoDaddyDomainsClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.4.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GoDaddyDomainsClient\Model;

use \ArrayAccess;

/**
 * RealNameValidation Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     GoDaddyDomainsClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RealNameValidation implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RealNameValidation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'status' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'status' => 'status'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'status' => 'setStatus'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_APPROVED = 'APPROVED';
    const STATUS_PENDING = 'PENDING';
    const STATUS_PENDING_ASSOCIATION_WITH_DOMAIN = 'PENDING_ASSOCIATION_WITH_DOMAIN';
    const STATUS_PENDING_SUBMISSION_TO_VERIFICATION_SERVICE = 'PENDING_SUBMISSION_TO_VERIFICATION_SERVICE';
    const STATUS_PENDING_VERIFICATION_SERVICE_REPLY = 'PENDING_VERIFICATION_SERVICE_REPLY';
    const STATUS_PENDING_SUBMISSION_TO_REGISTRY = 'PENDING_SUBMISSION_TO_REGISTRY';
    const STATUS_PENDING_REGISTRY_REPLY = 'PENDING_REGISTRY_REPLY';
    const STATUS_PENDING_DOMAIN_UPDATE = 'PENDING_DOMAIN_UPDATE';
    const STATUS_REJECTED = 'REJECTED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_PENDING,
            self::STATUS_PENDING_ASSOCIATION_WITH_DOMAIN,
            self::STATUS_PENDING_SUBMISSION_TO_VERIFICATION_SERVICE,
            self::STATUS_PENDING_VERIFICATION_SERVICE_REPLY,
            self::STATUS_PENDING_SUBMISSION_TO_REGISTRY,
            self::STATUS_PENDING_REGISTRY_REPLY,
            self::STATUS_PENDING_DOMAIN_UPDATE,
            self::STATUS_REJECTED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("APPROVED", "PENDING", "PENDING_ASSOCIATION_WITH_DOMAIN", "PENDING_SUBMISSION_TO_VERIFICATION_SERVICE", "PENDING_VERIFICATION_SERVICE_REPLY", "PENDING_SUBMISSION_TO_REGISTRY", "PENDING_REGISTRY_REPLY", "PENDING_DOMAIN_UPDATE", "REJECTED");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("APPROVED", "PENDING", "PENDING_ASSOCIATION_WITH_DOMAIN", "PENDING_SUBMISSION_TO_VERIFICATION_SERVICE", "PENDING_VERIFICATION_SERVICE_REPLY", "PENDING_SUBMISSION_TO_REGISTRY", "PENDING_REGISTRY_REPLY", "PENDING_DOMAIN_UPDATE", "REJECTED");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('APPROVED', 'PENDING', 'PENDING_ASSOCIATION_WITH_DOMAIN', 'PENDING_SUBMISSION_TO_VERIFICATION_SERVICE', 'PENDING_VERIFICATION_SERVICE_REPLY', 'PENDING_SUBMISSION_TO_REGISTRY', 'PENDING_REGISTRY_REPLY', 'PENDING_DOMAIN_UPDATE', 'REJECTED');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'APPROVED', 'PENDING', 'PENDING_ASSOCIATION_WITH_DOMAIN', 'PENDING_SUBMISSION_TO_VERIFICATION_SERVICE', 'PENDING_VERIFICATION_SERVICE_REPLY', 'PENDING_SUBMISSION_TO_REGISTRY', 'PENDING_REGISTRY_REPLY', 'PENDING_DOMAIN_UPDATE', 'REJECTED'");
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\GoDaddyDomainsClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\GoDaddyDomainsClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}

