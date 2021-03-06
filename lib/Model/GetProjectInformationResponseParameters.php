<?php
/**
 * GetProjectInformationResponseParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  VOP\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * V.O.P GmbH & Co. KG - Rest API
 *
 * Rest API-Endpoint
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VOP\Rest\Model;

use \ArrayAccess;
use \VOP\Rest\ObjectSerializer;

/**
 * GetProjectInformationResponseParameters Class Doc Comment
 *
 * @category Class
 * @package  VOP\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProjectInformationResponseParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getProjectInformationResponseParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'b2c_projects' => '\VOP\Rest\Model\ProjectInformation[]',
'b2b_projects' => '\VOP\Rest\Model\ProjectInformation[]',
'shop_id' => 'int',
'internal_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'b2c_projects' => null,
'b2b_projects' => null,
'shop_id' => null,
'internal_id' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'b2c_projects' => 'b2cProjects',
'b2b_projects' => 'b2bProjects',
'shop_id' => 'shopId',
'internal_id' => 'internalId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'b2c_projects' => 'setB2cProjects',
'b2b_projects' => 'setB2bProjects',
'shop_id' => 'setShopId',
'internal_id' => 'setInternalId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'b2c_projects' => 'getB2cProjects',
'b2b_projects' => 'getB2bProjects',
'shop_id' => 'getShopId',
'internal_id' => 'getInternalId'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['b2c_projects'] = isset($data['b2c_projects']) ? $data['b2c_projects'] : null;
        $this->container['b2b_projects'] = isset($data['b2b_projects']) ? $data['b2b_projects'] : null;
        $this->container['shop_id'] = isset($data['shop_id']) ? $data['shop_id'] : null;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets b2c_projects
     *
     * @return \VOP\Rest\Model\ProjectInformation[]
     */
    public function getB2cProjects()
    {
        return $this->container['b2c_projects'];
    }

    /**
     * Sets b2c_projects
     *
     * @param \VOP\Rest\Model\ProjectInformation[] $b2c_projects Projectlist b2c
     *
     * @return $this
     */
    public function setB2cProjects($b2c_projects)
    {
        $this->container['b2c_projects'] = $b2c_projects;

        return $this;
    }

    /**
     * Gets b2b_projects
     *
     * @return \VOP\Rest\Model\ProjectInformation[]
     */
    public function getB2bProjects()
    {
        return $this->container['b2b_projects'];
    }

    /**
     * Sets b2b_projects
     *
     * @param \VOP\Rest\Model\ProjectInformation[] $b2b_projects ProjectList b2b
     *
     * @return $this
     */
    public function setB2bProjects($b2b_projects)
    {
        $this->container['b2b_projects'] = $b2b_projects;

        return $this;
    }

    /**
     * Gets shop_id
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->container['shop_id'];
    }

    /**
     * Sets shop_id
     *
     * @param int $shop_id shopId
     *
     * @return $this
     */
    public function setShopId($shop_id)
    {
        $this->container['shop_id'] = $shop_id;

        return $this;
    }

    /**
     * Gets internal_id
     *
     * @return int
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param int $internal_id internalId
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
