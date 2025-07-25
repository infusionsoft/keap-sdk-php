<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Keap\Core\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\Keap\Core\V2\Model\Address',
        'admin' => 'bool',
        'company_name' => 'string',
        'create_time' => 'string',
        'created_by' => 'int',
        'email_addresses' => '\Keap\Core\V2\Model\EmailAddress[]',
        'family_name' => 'string',
        'fax_numbers' => '\Keap\Core\V2\Model\FaxNumber[]',
        'given_name' => 'string',
        'global_user_id' => 'string',
        'id' => 'string',
        'keap_id' => 'string',
        'partner' => 'bool',
        'phone_numbers' => '\Keap\Core\V2\Model\PhoneNumber[]',
        'social_accounts' => '\Keap\Core\V2\Model\SocialAccount[]',
        'status' => 'string',
        'title' => 'string',
        'update_time' => 'string',
        'updated_by' => 'int',
        'website' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'admin' => null,
        'company_name' => null,
        'create_time' => null,
        'created_by' => 'int64',
        'email_addresses' => null,
        'family_name' => null,
        'fax_numbers' => null,
        'given_name' => null,
        'global_user_id' => null,
        'id' => null,
        'keap_id' => null,
        'partner' => null,
        'phone_numbers' => null,
        'social_accounts' => null,
        'status' => null,
        'title' => null,
        'update_time' => null,
        'updated_by' => 'int64',
        'website' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'admin' => false,
        'company_name' => false,
        'create_time' => false,
        'created_by' => false,
        'email_addresses' => false,
        'family_name' => false,
        'fax_numbers' => false,
        'given_name' => false,
        'global_user_id' => false,
        'id' => false,
        'keap_id' => false,
        'partner' => false,
        'phone_numbers' => false,
        'social_accounts' => false,
        'status' => false,
        'title' => false,
        'update_time' => false,
        'updated_by' => false,
        'website' => false
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
        'address' => 'address',
        'admin' => 'admin',
        'company_name' => 'company_name',
        'create_time' => 'create_time',
        'created_by' => 'created_by',
        'email_addresses' => 'email_addresses',
        'family_name' => 'family_name',
        'fax_numbers' => 'fax_numbers',
        'given_name' => 'given_name',
        'global_user_id' => 'global_user_id',
        'id' => 'id',
        'keap_id' => 'keap_id',
        'partner' => 'partner',
        'phone_numbers' => 'phone_numbers',
        'social_accounts' => 'social_accounts',
        'status' => 'status',
        'title' => 'title',
        'update_time' => 'update_time',
        'updated_by' => 'updated_by',
        'website' => 'website'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'admin' => 'setAdmin',
        'company_name' => 'setCompanyName',
        'create_time' => 'setCreateTime',
        'created_by' => 'setCreatedBy',
        'email_addresses' => 'setEmailAddresses',
        'family_name' => 'setFamilyName',
        'fax_numbers' => 'setFaxNumbers',
        'given_name' => 'setGivenName',
        'global_user_id' => 'setGlobalUserId',
        'id' => 'setId',
        'keap_id' => 'setKeapId',
        'partner' => 'setPartner',
        'phone_numbers' => 'setPhoneNumbers',
        'social_accounts' => 'setSocialAccounts',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'update_time' => 'setUpdateTime',
        'updated_by' => 'setUpdatedBy',
        'website' => 'setWebsite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'admin' => 'getAdmin',
        'company_name' => 'getCompanyName',
        'create_time' => 'getCreateTime',
        'created_by' => 'getCreatedBy',
        'email_addresses' => 'getEmailAddresses',
        'family_name' => 'getFamilyName',
        'fax_numbers' => 'getFaxNumbers',
        'given_name' => 'getGivenName',
        'global_user_id' => 'getGlobalUserId',
        'id' => 'getId',
        'keap_id' => 'getKeapId',
        'partner' => 'getPartner',
        'phone_numbers' => 'getPhoneNumbers',
        'social_accounts' => 'getSocialAccounts',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'update_time' => 'getUpdateTime',
        'updated_by' => 'getUpdatedBy',
        'website' => 'getWebsite'
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

    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INVITED = 'INVITED';
    public const STATUS_INACTIVE = 'INACTIVE';
    public const STATUS_NOT_A_USER = 'NOT_A_USER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INVITED,
            self::STATUS_INACTIVE,
            self::STATUS_NOT_A_USER,
        ];
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('admin', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('create_time', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('email_addresses', $data ?? [], null);
        $this->setIfExists('family_name', $data ?? [], null);
        $this->setIfExists('fax_numbers', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('global_user_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('keap_id', $data ?? [], null);
        $this->setIfExists('partner', $data ?? [], null);
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('social_accounts', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('update_time', $data ?? [], null);
        $this->setIfExists('updated_by', $data ?? [], null);
        $this->setIfExists('website', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets address
     *
     * @return \Keap\Core\V2\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Keap\Core\V2\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return bool|null
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool|null $admin admin
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        if (is_null($admin)) {
            throw new \InvalidArgumentException('non-nullable admin cannot be null');
        }
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

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
     * Gets created_by
     *
     * @return int|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets email_addresses
     *
     * @return \Keap\Core\V2\Model\EmailAddress[]|null
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param \Keap\Core\V2\Model\EmailAddress[]|null $email_addresses email_addresses
     *
     * @return self
     */
    public function setEmailAddresses($email_addresses)
    {
        if (is_null($email_addresses)) {
            throw new \InvalidArgumentException('non-nullable email_addresses cannot be null');
        }
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string|null $family_name family_name
     *
     * @return self
     */
    public function setFamilyName($family_name)
    {
        if (is_null($family_name)) {
            throw new \InvalidArgumentException('non-nullable family_name cannot be null');
        }
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets fax_numbers
     *
     * @return \Keap\Core\V2\Model\FaxNumber[]|null
     */
    public function getFaxNumbers()
    {
        return $this->container['fax_numbers'];
    }

    /**
     * Sets fax_numbers
     *
     * @param \Keap\Core\V2\Model\FaxNumber[]|null $fax_numbers fax_numbers
     *
     * @return self
     */
    public function setFaxNumbers($fax_numbers)
    {
        if (is_null($fax_numbers)) {
            throw new \InvalidArgumentException('non-nullable fax_numbers cannot be null');
        }
        $this->container['fax_numbers'] = $fax_numbers;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name given_name
     *
     * @return self
     */
    public function setGivenName($given_name)
    {
        if (is_null($given_name)) {
            throw new \InvalidArgumentException('non-nullable given_name cannot be null');
        }
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets global_user_id
     *
     * @return string|null
     */
    public function getGlobalUserId()
    {
        return $this->container['global_user_id'];
    }

    /**
     * Sets global_user_id
     *
     * @param string|null $global_user_id global_user_id
     *
     * @return self
     */
    public function setGlobalUserId($global_user_id)
    {
        if (is_null($global_user_id)) {
            throw new \InvalidArgumentException('non-nullable global_user_id cannot be null');
        }
        $this->container['global_user_id'] = $global_user_id;

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
     * Gets keap_id
     *
     * @return string|null
     */
    public function getKeapId()
    {
        return $this->container['keap_id'];
    }

    /**
     * Sets keap_id
     *
     * @param string|null $keap_id keap_id
     *
     * @return self
     */
    public function setKeapId($keap_id)
    {
        if (is_null($keap_id)) {
            throw new \InvalidArgumentException('non-nullable keap_id cannot be null');
        }
        $this->container['keap_id'] = $keap_id;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return bool|null
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param bool|null $partner partner
     *
     * @return self
     */
    public function setPartner($partner)
    {
        if (is_null($partner)) {
            throw new \InvalidArgumentException('non-nullable partner cannot be null');
        }
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Keap\Core\V2\Model\PhoneNumber[]|null
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Keap\Core\V2\Model\PhoneNumber[]|null $phone_numbers phone_numbers
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        if (is_null($phone_numbers)) {
            throw new \InvalidArgumentException('non-nullable phone_numbers cannot be null');
        }
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets social_accounts
     *
     * @return \Keap\Core\V2\Model\SocialAccount[]|null
     */
    public function getSocialAccounts()
    {
        return $this->container['social_accounts'];
    }

    /**
     * Sets social_accounts
     *
     * @param \Keap\Core\V2\Model\SocialAccount[]|null $social_accounts social_accounts
     *
     * @return self
     */
    public function setSocialAccounts($social_accounts)
    {
        if (is_null($social_accounts)) {
            throw new \InvalidArgumentException('non-nullable social_accounts cannot be null');
        }
        $this->container['social_accounts'] = $social_accounts;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * Gets updated_by
     *
     * @return int|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param int|null $updated_by updated_by
     *
     * @return self
     */
    public function setUpdatedBy($updated_by)
    {
        if (is_null($updated_by)) {
            throw new \InvalidArgumentException('non-nullable updated_by cannot be null');
        }
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        if (is_null($website)) {
            throw new \InvalidArgumentException('non-nullable website cannot be null');
        }
        $this->container['website'] = $website;

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


