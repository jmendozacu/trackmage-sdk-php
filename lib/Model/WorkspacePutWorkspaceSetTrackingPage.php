<?php
/**
 * WorkspacePutWorkspaceSetTrackingPage
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
 * The version of the OpenAPI document: v0.1.41-7-gcca08cf
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
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
 * WorkspacePutWorkspaceSetTrackingPage Class Doc Comment
 *
 * @category Class
 * @package  TrackMage\Client\Swagger
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WorkspacePutWorkspaceSetTrackingPage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Workspace-putWorkspace_setTrackingPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'defaultTrackingPage' => 'string',
        'workflowsOrder' => 'string[]',
        'logo' => 'object',
        'shipments' => 'string[]',
        'orders' => 'string[]',
        'orderStatuses' => 'string[]',
        'workflows' => 'string[]',
        'trackingPageLinkSettings' => 'string[]',
        'trackingPages' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'title' => null,
        'defaultTrackingPage' => null,
        'workflowsOrder' => null,
        'logo' => null,
        'shipments' => null,
        'orders' => null,
        'orderStatuses' => null,
        'workflows' => null,
        'trackingPageLinkSettings' => null,
        'trackingPages' => null
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
        'title' => 'title',
        'defaultTrackingPage' => 'defaultTrackingPage',
        'workflowsOrder' => 'workflowsOrder',
        'logo' => 'logo',
        'shipments' => 'shipments',
        'orders' => 'orders',
        'orderStatuses' => 'orderStatuses',
        'workflows' => 'workflows',
        'trackingPageLinkSettings' => 'trackingPageLinkSettings',
        'trackingPages' => 'trackingPages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'defaultTrackingPage' => 'setDefaultTrackingPage',
        'workflowsOrder' => 'setWorkflowsOrder',
        'logo' => 'setLogo',
        'shipments' => 'setShipments',
        'orders' => 'setOrders',
        'orderStatuses' => 'setOrderStatuses',
        'workflows' => 'setWorkflows',
        'trackingPageLinkSettings' => 'setTrackingPageLinkSettings',
        'trackingPages' => 'setTrackingPages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'defaultTrackingPage' => 'getDefaultTrackingPage',
        'workflowsOrder' => 'getWorkflowsOrder',
        'logo' => 'getLogo',
        'shipments' => 'getShipments',
        'orders' => 'getOrders',
        'orderStatuses' => 'getOrderStatuses',
        'workflows' => 'getWorkflows',
        'trackingPageLinkSettings' => 'getTrackingPageLinkSettings',
        'trackingPages' => 'getTrackingPages'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['defaultTrackingPage'] = isset($data['defaultTrackingPage']) ? $data['defaultTrackingPage'] : null;
        $this->container['workflowsOrder'] = isset($data['workflowsOrder']) ? $data['workflowsOrder'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['shipments'] = isset($data['shipments']) ? $data['shipments'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['orderStatuses'] = isset($data['orderStatuses']) ? $data['orderStatuses'] : null;
        $this->container['workflows'] = isset($data['workflows']) ? $data['workflows'] : null;
        $this->container['trackingPageLinkSettings'] = isset($data['trackingPageLinkSettings']) ? $data['trackingPageLinkSettings'] : null;
        $this->container['trackingPages'] = isset($data['trackingPages']) ? $data['trackingPages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['defaultTrackingPage'] === null) {
            $invalidProperties[] = "'defaultTrackingPage' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets defaultTrackingPage
     *
     * @return string
     */
    public function getDefaultTrackingPage()
    {
        return $this->container['defaultTrackingPage'];
    }

    /**
     * Sets defaultTrackingPage
     *
     * @param string $defaultTrackingPage defaultTrackingPage
     *
     * @return $this
     */
    public function setDefaultTrackingPage($defaultTrackingPage)
    {
        $this->container['defaultTrackingPage'] = $defaultTrackingPage;

        return $this;
    }

    /**
     * Gets workflowsOrder
     *
     * @return string[]|null
     */
    public function getWorkflowsOrder()
    {
        return $this->container['workflowsOrder'];
    }

    /**
     * Sets workflowsOrder
     *
     * @param string[]|null $workflowsOrder workflowsOrder
     *
     * @return $this
     */
    public function setWorkflowsOrder($workflowsOrder)
    {
        $this->container['workflowsOrder'] = $workflowsOrder;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return object|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param object|null $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return string[]|null
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param string[]|null $shipments shipments
     *
     * @return $this
     */
    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return string[]|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param string[]|null $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets orderStatuses
     *
     * @return string[]|null
     */
    public function getOrderStatuses()
    {
        return $this->container['orderStatuses'];
    }

    /**
     * Sets orderStatuses
     *
     * @param string[]|null $orderStatuses orderStatuses
     *
     * @return $this
     */
    public function setOrderStatuses($orderStatuses)
    {
        $this->container['orderStatuses'] = $orderStatuses;

        return $this;
    }

    /**
     * Gets workflows
     *
     * @return string[]|null
     */
    public function getWorkflows()
    {
        return $this->container['workflows'];
    }

    /**
     * Sets workflows
     *
     * @param string[]|null $workflows workflows
     *
     * @return $this
     */
    public function setWorkflows($workflows)
    {
        $this->container['workflows'] = $workflows;

        return $this;
    }

    /**
     * Gets trackingPageLinkSettings
     *
     * @return string[]|null
     */
    public function getTrackingPageLinkSettings()
    {
        return $this->container['trackingPageLinkSettings'];
    }

    /**
     * Sets trackingPageLinkSettings
     *
     * @param string[]|null $trackingPageLinkSettings trackingPageLinkSettings
     *
     * @return $this
     */
    public function setTrackingPageLinkSettings($trackingPageLinkSettings)
    {
        $this->container['trackingPageLinkSettings'] = $trackingPageLinkSettings;

        return $this;
    }

    /**
     * Gets trackingPages
     *
     * @return string[]|null
     */
    public function getTrackingPages()
    {
        return $this->container['trackingPages'];
    }

    /**
     * Sets trackingPages
     *
     * @param string[]|null $trackingPages trackingPages
     *
     * @return $this
     */
    public function setTrackingPages($trackingPages)
    {
        $this->container['trackingPages'] = $trackingPages;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


