<?php
/**
 * GenerateTrackingPageLinksRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TrackMage API
 *
 * TrackMage API
 *
 * OpenAPI spec version: v0.1.40-5-g0495724
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TrackMage\Client\Swagger\Model;

use \ArrayAccess;
use \TrackMage\Client\Swagger\ObjectSerializer;

/**
 * GenerateTrackingPageLinksRequest Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GenerateTrackingPageLinksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GenerateTrackingPageLinksRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trackingPageId' => 'int',
        'groupByField' => 'string',
        'filter' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'trackingPageId' => null,
        'groupByField' => null,
        'filter' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'trackingPageId' => 'trackingPageId',
        'groupByField' => 'groupByField',
        'filter' => 'filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trackingPageId' => 'setTrackingPageId',
        'groupByField' => 'setGroupByField',
        'filter' => 'setFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trackingPageId' => 'getTrackingPageId',
        'groupByField' => 'getGroupByField',
        'filter' => 'getFilter'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['trackingPageId'] = isset($data['trackingPageId']) ? $data['trackingPageId'] : null;
        $this->container['groupByField'] = isset($data['groupByField']) ? $data['groupByField'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['trackingPageId'] === null) {
            $invalidProperties[] = "'trackingPageId' can't be null";
        }
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
     * Gets trackingPageId
     *
     * @return int
     */
    public function getTrackingPageId()
    {
        return $this->container['trackingPageId'];
    }

    /**
     * Sets trackingPageId
     *
     * @param int $trackingPageId trackingPageId
     *
     * @return $this
     */
    public function setTrackingPageId($trackingPageId)
    {
        $this->container['trackingPageId'] = $trackingPageId;

        return $this;
    }

    /**
     * Gets groupByField
     *
     * @return string|null
     */
    public function getGroupByField()
    {
        return $this->container['groupByField'];
    }

    /**
     * Sets groupByField
     *
     * @param string|null $groupByField groupByField
     *
     * @return $this
     */
    public function setGroupByField($groupByField)
    {
        $this->container['groupByField'] = $groupByField;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return string[]|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param string[]|null $filter filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


