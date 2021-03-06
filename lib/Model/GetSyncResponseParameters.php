<?php
/**
 * GetSyncResponseParameters
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
 * GetSyncResponseParameters Class Doc Comment
 *
 * @category Class
 * @package  VOP\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSyncResponseParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getSyncResponseParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoices' => '\VOP\Rest\Model\VopInvoice[]',
'mapped_case_hash' => 'string',
'amount' => 'float',
'restamount' => 'float',
'state' => 'string',
'titled' => 'int',
'tzv' => 'int',
'closed' => 'int',
'lastchange' => 'int',
'type' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoices' => null,
'mapped_case_hash' => null,
'amount' => 'float',
'restamount' => 'float',
'state' => null,
'titled' => null,
'tzv' => null,
'closed' => null,
'lastchange' => null,
'type' => null    ];

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
        'invoices' => 'invoices',
'mapped_case_hash' => 'mappedCaseHash',
'amount' => 'amount',
'restamount' => 'restamount',
'state' => 'state',
'titled' => 'titled',
'tzv' => 'tzv',
'closed' => 'closed',
'lastchange' => 'lastchange',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoices' => 'setInvoices',
'mapped_case_hash' => 'setMappedCaseHash',
'amount' => 'setAmount',
'restamount' => 'setRestamount',
'state' => 'setState',
'titled' => 'setTitled',
'tzv' => 'setTzv',
'closed' => 'setClosed',
'lastchange' => 'setLastchange',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoices' => 'getInvoices',
'mapped_case_hash' => 'getMappedCaseHash',
'amount' => 'getAmount',
'restamount' => 'getRestamount',
'state' => 'getState',
'titled' => 'getTitled',
'tzv' => 'getTzv',
'closed' => 'getClosed',
'lastchange' => 'getLastchange',
'type' => 'getType'    ];

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
        $this->container['invoices'] = isset($data['invoices']) ? $data['invoices'] : null;
        $this->container['mapped_case_hash'] = isset($data['mapped_case_hash']) ? $data['mapped_case_hash'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['restamount'] = isset($data['restamount']) ? $data['restamount'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['titled'] = isset($data['titled']) ? $data['titled'] : null;
        $this->container['tzv'] = isset($data['tzv']) ? $data['tzv'] : null;
        $this->container['closed'] = isset($data['closed']) ? $data['closed'] : null;
        $this->container['lastchange'] = isset($data['lastchange']) ? $data['lastchange'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets invoices
     *
     * @return \VOP\Rest\Model\VopInvoice[]
     */
    public function getInvoices()
    {
        return $this->container['invoices'];
    }

    /**
     * Sets invoices
     *
     * @param \VOP\Rest\Model\VopInvoice[] $invoices returns invoices for case
     *
     * @return $this
     */
    public function setInvoices($invoices)
    {
        $this->container['invoices'] = $invoices;

        return $this;
    }

    /**
     * Gets mapped_case_hash
     *
     * @return string
     */
    public function getMappedCaseHash()
    {
        return $this->container['mapped_case_hash'];
    }

    /**
     * Sets mapped_case_hash
     *
     * @param string $mapped_case_hash returns the hash for current case to map internal invoices
     *
     * @return $this
     */
    public function setMappedCaseHash($mapped_case_hash)
    {
        $this->container['mapped_case_hash'] = $mapped_case_hash;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount of case
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets restamount
     *
     * @return float
     */
    public function getRestamount()
    {
        return $this->container['restamount'];
    }

    /**
     * Sets restamount
     *
     * @param float $restamount restamount of case
     *
     * @return $this
     */
    public function setRestamount($restamount)
    {
        $this->container['restamount'] = $restamount;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state returns the state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets titled
     *
     * @return int
     */
    public function getTitled()
    {
        return $this->container['titled'];
    }

    /**
     * Sets titled
     *
     * @param int $titled titled
     *
     * @return $this
     */
    public function setTitled($titled)
    {
        $this->container['titled'] = $titled;

        return $this;
    }

    /**
     * Gets tzv
     *
     * @return int
     */
    public function getTzv()
    {
        return $this->container['tzv'];
    }

    /**
     * Sets tzv
     *
     * @param int $tzv tzv
     *
     * @return $this
     */
    public function setTzv($tzv)
    {
        $this->container['tzv'] = $tzv;

        return $this;
    }

    /**
     * Gets closed
     *
     * @return int
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param int $closed closed
     *
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

        return $this;
    }

    /**
     * Gets lastchange
     *
     * @return int
     */
    public function getLastchange()
    {
        return $this->container['lastchange'];
    }

    /**
     * Sets lastchange
     *
     * @param int $lastchange lastchange
     *
     * @return $this
     */
    public function setLastchange($lastchange)
    {
        $this->container['lastchange'] = $lastchange;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type of case
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
