<?php
/**
 * GetNoteResponse
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Keap\Core\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Keap REST API
 *
 * Keap REST Core Service
 *
 * The version of the OpenAPI document: 2.70.0.834462-hf-202507221415
 * Contact: api@keap.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Keap\Core\V2\Model;

use \ArrayAccess;
use \Keap\Core\V2\ObjectSerializer;

/**
 * GetNoteResponse Class Doc Comment
 *
 * @category Class
 * @package  Keap\Core\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNoteResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetNoteResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assigned_to_user' => '\Keap\Core\V2\Model\BasicUser',
        'contact_id' => 'string',
        'create_time' => 'string',
        'created_by_user_id' => 'string',
        'id' => 'string',
        'last_updated_by_user_id' => 'string',
        'pinned_at' => 'string',
        'text' => 'string',
        'title' => 'string',
        'type' => 'string',
        'update_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assigned_to_user' => null,
        'contact_id' => null,
        'create_time' => null,
        'created_by_user_id' => null,
        'id' => null,
        'last_updated_by_user_id' => null,
        'pinned_at' => null,
        'text' => null,
        'title' => null,
        'type' => null,
        'update_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'assigned_to_user' => false,
        'contact_id' => false,
        'create_time' => false,
        'created_by_user_id' => false,
        'id' => false,
        'last_updated_by_user_id' => false,
        'pinned_at' => false,
        'text' => false,
        'title' => false,
        'type' => false,
        'update_time' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'assigned_to_user' => 'assigned_to_user',
        'contact_id' => 'contact_id',
        'create_time' => 'create_time',
        'created_by_user_id' => 'created_by_user_id',
        'id' => 'id',
        'last_updated_by_user_id' => 'last_updated_by_user_id',
        'pinned_at' => 'pinned_at',
        'text' => 'text',
        'title' => 'title',
        'type' => 'type',
        'update_time' => 'update_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assigned_to_user' => 'setAssignedToUser',
        'contact_id' => 'setContactId',
        'create_time' => 'setCreateTime',
        'created_by_user_id' => 'setCreatedByUserId',
        'id' => 'setId',
        'last_updated_by_user_id' => 'setLastUpdatedByUserId',
        'pinned_at' => 'setPinnedAt',
        'text' => 'setText',
        'title' => 'setTitle',
        'type' => 'setType',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assigned_to_user' => 'getAssignedToUser',
        'contact_id' => 'getContactId',
        'create_time' => 'getCreateTime',
        'created_by_user_id' => 'getCreatedByUserId',
        'id' => 'getId',
        'last_updated_by_user_id' => 'getLastUpdatedByUserId',
        'pinned_at' => 'getPinnedAt',
        'text' => 'getText',
        'title' => 'getTitle',
        'type' => 'getType',
        'update_time' => 'getUpdateTime'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('assigned_to_user', $data ?? [], null);
        $this->setIfExists('contact_id', $data ?? [], null);
        $this->setIfExists('create_time', $data ?? [], null);
        $this->setIfExists('created_by_user_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('last_updated_by_user_id', $data ?? [], null);
        $this->setIfExists('pinned_at', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('update_time', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets assigned_to_user
     *
     * @return \Keap\Core\V2\Model\BasicUser|null
     */
    public function getAssignedToUser()
    {
        return $this->container['assigned_to_user'];
    }

    /**
     * Sets assigned_to_user
     *
     * @param \Keap\Core\V2\Model\BasicUser|null $assigned_to_user assigned_to_user
     *
     * @return self
     */
    public function setAssignedToUser($assigned_to_user)
    {
        if (is_null($assigned_to_user)) {
            throw new \InvalidArgumentException('non-nullable assigned_to_user cannot be null');
        }
        $this->container['assigned_to_user'] = $assigned_to_user;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id contact_id
     *
     * @return self
     */
    public function setContactId($contact_id)
    {
        if (is_null($contact_id)) {
            throw new \InvalidArgumentException('non-nullable contact_id cannot be null');
        }
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string|null $create_time create_time
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        if (is_null($create_time)) {
            throw new \InvalidArgumentException('non-nullable create_time cannot be null');
        }
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets created_by_user_id
     *
     * @return string|null
     */
    public function getCreatedByUserId()
    {
        return $this->container['created_by_user_id'];
    }

    /**
     * Sets created_by_user_id
     *
     * @param string|null $created_by_user_id created_by_user_id
     *
     * @return self
     */
    public function setCreatedByUserId($created_by_user_id)
    {
        if (is_null($created_by_user_id)) {
            throw new \InvalidArgumentException('non-nullable created_by_user_id cannot be null');
        }
        $this->container['created_by_user_id'] = $created_by_user_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_updated_by_user_id
     *
     * @return string|null
     */
    public function getLastUpdatedByUserId()
    {
        return $this->container['last_updated_by_user_id'];
    }

    /**
     * Sets last_updated_by_user_id
     *
     * @param string|null $last_updated_by_user_id last_updated_by_user_id
     *
     * @return self
     */
    public function setLastUpdatedByUserId($last_updated_by_user_id)
    {
        if (is_null($last_updated_by_user_id)) {
            throw new \InvalidArgumentException('non-nullable last_updated_by_user_id cannot be null');
        }
        $this->container['last_updated_by_user_id'] = $last_updated_by_user_id;

        return $this;
    }

    /**
     * Gets pinned_at
     *
     * @return string|null
     */
    public function getPinnedAt()
    {
        return $this->container['pinned_at'];
    }

    /**
     * Sets pinned_at
     *
     * @param string|null $pinned_at pinned_at
     *
     * @return self
     */
    public function setPinnedAt($pinned_at)
    {
        if (is_null($pinned_at)) {
            throw new \InvalidArgumentException('non-nullable pinned_at cannot be null');
        }
        $this->container['pinned_at'] = $pinned_at;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string|null $update_time update_time
     *
     * @return self
     */
    public function setUpdateTime($update_time)
    {
        if (is_null($update_time)) {
            throw new \InvalidArgumentException('non-nullable update_time cannot be null');
        }
        $this->container['update_time'] = $update_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


