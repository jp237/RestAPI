<?php
/**
 * GetInformationResponseParameters
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
 * GetInformationResponseParameters Class Doc Comment
 *
 * @category Class
 * @package  VOP\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetInformationResponseParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getInformationResponseParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_reference' => 'string',
'debt_amount' => 'float',
'fee' => 'float',
'interest' => 'float',
'target_iban' => 'string',
'target_bic' => 'string',
'purpose' => 'string',
'email_date' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_reference' => null,
'debt_amount' => 'float',
'fee' => 'float',
'interest' => 'float',
'target_iban' => null,
'target_bic' => null,
'purpose' => null,
'email_date' => null    ];

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
        'client_reference' => 'clientReference',
'debt_amount' => 'debtAmount',
'fee' => 'fee',
'interest' => 'interest',
'target_iban' => 'targetIBAN',
'target_bic' => 'targetBIC',
'purpose' => 'purpose',
'email_date' => 'emailDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_reference' => 'setClientReference',
'debt_amount' => 'setDebtAmount',
'fee' => 'setFee',
'interest' => 'setInterest',
'target_iban' => 'setTargetIban',
'target_bic' => 'setTargetBic',
'purpose' => 'setPurpose',
'email_date' => 'setEmailDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_reference' => 'getClientReference',
'debt_amount' => 'getDebtAmount',
'fee' => 'getFee',
'interest' => 'getInterest',
'target_iban' => 'getTargetIban',
'target_bic' => 'getTargetBic',
'purpose' => 'getPurpose',
'email_date' => 'getEmailDate'    ];

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
        $this->container['client_reference'] = isset($data['client_reference']) ? $data['client_reference'] : null;
        $this->container['debt_amount'] = isset($data['debt_amount']) ? $data['debt_amount'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['interest'] = isset($data['interest']) ? $data['interest'] : null;
        $this->container['target_iban'] = isset($data['target_iban']) ? $data['target_iban'] : null;
        $this->container['target_bic'] = isset($data['target_bic']) ? $data['target_bic'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['email_date'] = isset($data['email_date']) ? $data['email_date'] : null;
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
     * Gets client_reference
     *
     * @return string
     */
    public function getClientReference()
    {
        return $this->container['client_reference'];
    }

    /**
     * Sets client_reference
     *
     * @param string $client_reference client reference
     *
     * @return $this
     */
    public function setClientReference($client_reference)
    {
        $this->container['client_reference'] = $client_reference;

        return $this;
    }

    /**
     * Gets debt_amount
     *
     * @return float
     */
    public function getDebtAmount()
    {
        return $this->container['debt_amount'];
    }

    /**
     * Sets debt_amount
     *
     * @param float $debt_amount debt amount
     *
     * @return $this
     */
    public function setDebtAmount($debt_amount)
    {
        $this->container['debt_amount'] = $debt_amount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets interest
     *
     * @return float
     */
    public function getInterest()
    {
        return $this->container['interest'];
    }

    /**
     * Sets interest
     *
     * @param float $interest interest
     *
     * @return $this
     */
    public function setInterest($interest)
    {
        $this->container['interest'] = $interest;

        return $this;
    }

    /**
     * Gets target_iban
     *
     * @return string
     */
    public function getTargetIban()
    {
        return $this->container['target_iban'];
    }

    /**
     * Sets target_iban
     *
     * @param string $target_iban Target IBAN
     *
     * @return $this
     */
    public function setTargetIban($target_iban)
    {
        $this->container['target_iban'] = $target_iban;

        return $this;
    }

    /**
     * Gets target_bic
     *
     * @return string
     */
    public function getTargetBic()
    {
        return $this->container['target_bic'];
    }

    /**
     * Sets target_bic
     *
     * @param string $target_bic Target BIC
     *
     * @return $this
     */
    public function setTargetBic($target_bic)
    {
        $this->container['target_bic'] = $target_bic;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose client reference
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets email_date
     *
     * @return string
     */
    public function getEmailDate()
    {
        return $this->container['email_date'];
    }

    /**
     * Sets email_date
     *
     * @param string $email_date datetime email
     *
     * @return $this
     */
    public function setEmailDate($email_date)
    {
        $this->container['email_date'] = $email_date;

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
