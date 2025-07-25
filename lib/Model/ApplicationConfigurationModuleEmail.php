<?php
/**
 * ApplicationConfigurationModuleEmail
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
 * ApplicationConfigurationModuleEmail Class Doc Comment
 *
 * @category Class
 * @package  Keap\Core\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplicationConfigurationModuleEmail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationConfigurationModuleEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'append_contact_key_to_links' => 'bool',
        'default_opt_in_link' => 'string',
        'default_opt_out_link' => 'string',
        'hide_emails_to_and_from_domains' => 'string',
        'whitelisted_domains' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'append_contact_key_to_links' => null,
        'default_opt_in_link' => null,
        'default_opt_out_link' => null,
        'hide_emails_to_and_from_domains' => null,
        'whitelisted_domains' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'append_contact_key_to_links' => false,
        'default_opt_in_link' => false,
        'default_opt_out_link' => false,
        'hide_emails_to_and_from_domains' => false,
        'whitelisted_domains' => false
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
        'append_contact_key_to_links' => 'append_contact_key_to_links',
        'default_opt_in_link' => 'default_opt_in_link',
        'default_opt_out_link' => 'default_opt_out_link',
        'hide_emails_to_and_from_domains' => 'hide_emails_to_and_from_domains',
        'whitelisted_domains' => 'whitelisted_domains'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'append_contact_key_to_links' => 'setAppendContactKeyToLinks',
        'default_opt_in_link' => 'setDefaultOptInLink',
        'default_opt_out_link' => 'setDefaultOptOutLink',
        'hide_emails_to_and_from_domains' => 'setHideEmailsToAndFromDomains',
        'whitelisted_domains' => 'setWhitelistedDomains'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'append_contact_key_to_links' => 'getAppendContactKeyToLinks',
        'default_opt_in_link' => 'getDefaultOptInLink',
        'default_opt_out_link' => 'getDefaultOptOutLink',
        'hide_emails_to_and_from_domains' => 'getHideEmailsToAndFromDomains',
        'whitelisted_domains' => 'getWhitelistedDomains'
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
        $this->setIfExists('append_contact_key_to_links', $data ?? [], null);
        $this->setIfExists('default_opt_in_link', $data ?? [], null);
        $this->setIfExists('default_opt_out_link', $data ?? [], null);
        $this->setIfExists('hide_emails_to_and_from_domains', $data ?? [], null);
        $this->setIfExists('whitelisted_domains', $data ?? [], null);
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
     * Gets append_contact_key_to_links
     *
     * @return bool|null
     */
    public function getAppendContactKeyToLinks()
    {
        return $this->container['append_contact_key_to_links'];
    }

    /**
     * Sets append_contact_key_to_links
     *
     * @param bool|null $append_contact_key_to_links append_contact_key_to_links
     *
     * @return self
     */
    public function setAppendContactKeyToLinks($append_contact_key_to_links)
    {
        if (is_null($append_contact_key_to_links)) {
            throw new \InvalidArgumentException('non-nullable append_contact_key_to_links cannot be null');
        }
        $this->container['append_contact_key_to_links'] = $append_contact_key_to_links;

        return $this;
    }

    /**
     * Gets default_opt_in_link
     *
     * @return string|null
     */
    public function getDefaultOptInLink()
    {
        return $this->container['default_opt_in_link'];
    }

    /**
     * Sets default_opt_in_link
     *
     * @param string|null $default_opt_in_link default_opt_in_link
     *
     * @return self
     */
    public function setDefaultOptInLink($default_opt_in_link)
    {
        if (is_null($default_opt_in_link)) {
            throw new \InvalidArgumentException('non-nullable default_opt_in_link cannot be null');
        }
        $this->container['default_opt_in_link'] = $default_opt_in_link;

        return $this;
    }

    /**
     * Gets default_opt_out_link
     *
     * @return string|null
     */
    public function getDefaultOptOutLink()
    {
        return $this->container['default_opt_out_link'];
    }

    /**
     * Sets default_opt_out_link
     *
     * @param string|null $default_opt_out_link default_opt_out_link
     *
     * @return self
     */
    public function setDefaultOptOutLink($default_opt_out_link)
    {
        if (is_null($default_opt_out_link)) {
            throw new \InvalidArgumentException('non-nullable default_opt_out_link cannot be null');
        }
        $this->container['default_opt_out_link'] = $default_opt_out_link;

        return $this;
    }

    /**
     * Gets hide_emails_to_and_from_domains
     *
     * @return string|null
     */
    public function getHideEmailsToAndFromDomains()
    {
        return $this->container['hide_emails_to_and_from_domains'];
    }

    /**
     * Sets hide_emails_to_and_from_domains
     *
     * @param string|null $hide_emails_to_and_from_domains hide_emails_to_and_from_domains
     *
     * @return self
     */
    public function setHideEmailsToAndFromDomains($hide_emails_to_and_from_domains)
    {
        if (is_null($hide_emails_to_and_from_domains)) {
            throw new \InvalidArgumentException('non-nullable hide_emails_to_and_from_domains cannot be null');
        }
        $this->container['hide_emails_to_and_from_domains'] = $hide_emails_to_and_from_domains;

        return $this;
    }

    /**
     * Gets whitelisted_domains
     *
     * @return string|null
     */
    public function getWhitelistedDomains()
    {
        return $this->container['whitelisted_domains'];
    }

    /**
     * Sets whitelisted_domains
     *
     * @param string|null $whitelisted_domains whitelisted_domains
     *
     * @return self
     */
    public function setWhitelistedDomains($whitelisted_domains)
    {
        if (is_null($whitelisted_domains)) {
            throw new \InvalidArgumentException('non-nullable whitelisted_domains cannot be null');
        }
        $this->container['whitelisted_domains'] = $whitelisted_domains;

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


