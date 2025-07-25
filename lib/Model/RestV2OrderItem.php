<?php
/**
 * RestV2OrderItem
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
 * RestV2OrderItem Class Doc Comment
 *
 * @category Class
 * @package  Keap\Core\V2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestV2OrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestV2OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cost' => '\Keap\Core\V2\Model\CurrencyValue',
        'description' => 'string',
        'discount' => '\Keap\Core\V2\Model\CurrencyValue',
        'id' => 'string',
        'item_type' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'order_item_taxes' => '\Keap\Core\V2\Model\OrderItemTax[]',
        'price' => '\Keap\Core\V2\Model\CurrencyValue',
        'product' => '\Keap\Core\V2\Model\OrderItemProduct',
        'quantity' => 'int',
        'special' => '\Keap\Core\V2\Model\Discount',
        'subscription' => '\Keap\Core\V2\Model\RestV2Subscription',
        'subscription_id' => 'string',
        'subscription_plan' => '\Keap\Core\V2\Model\RestSubscriptionPlan'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cost' => null,
        'description' => null,
        'discount' => null,
        'id' => null,
        'item_type' => null,
        'name' => null,
        'notes' => null,
        'order_item_taxes' => null,
        'price' => null,
        'product' => null,
        'quantity' => 'int32',
        'special' => null,
        'subscription' => null,
        'subscription_id' => null,
        'subscription_plan' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cost' => false,
        'description' => false,
        'discount' => false,
        'id' => false,
        'item_type' => false,
        'name' => false,
        'notes' => false,
        'order_item_taxes' => false,
        'price' => false,
        'product' => false,
        'quantity' => false,
        'special' => false,
        'subscription' => false,
        'subscription_id' => false,
        'subscription_plan' => false
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
        'cost' => 'cost',
        'description' => 'description',
        'discount' => 'discount',
        'id' => 'id',
        'item_type' => 'item_type',
        'name' => 'name',
        'notes' => 'notes',
        'order_item_taxes' => 'order_item_taxes',
        'price' => 'price',
        'product' => 'product',
        'quantity' => 'quantity',
        'special' => 'special',
        'subscription' => 'subscription',
        'subscription_id' => 'subscription_id',
        'subscription_plan' => 'subscription_plan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost' => 'setCost',
        'description' => 'setDescription',
        'discount' => 'setDiscount',
        'id' => 'setId',
        'item_type' => 'setItemType',
        'name' => 'setName',
        'notes' => 'setNotes',
        'order_item_taxes' => 'setOrderItemTaxes',
        'price' => 'setPrice',
        'product' => 'setProduct',
        'quantity' => 'setQuantity',
        'special' => 'setSpecial',
        'subscription' => 'setSubscription',
        'subscription_id' => 'setSubscriptionId',
        'subscription_plan' => 'setSubscriptionPlan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost' => 'getCost',
        'description' => 'getDescription',
        'discount' => 'getDiscount',
        'id' => 'getId',
        'item_type' => 'getItemType',
        'name' => 'getName',
        'notes' => 'getNotes',
        'order_item_taxes' => 'getOrderItemTaxes',
        'price' => 'getPrice',
        'product' => 'getProduct',
        'quantity' => 'getQuantity',
        'special' => 'getSpecial',
        'subscription' => 'getSubscription',
        'subscription_id' => 'getSubscriptionId',
        'subscription_plan' => 'getSubscriptionPlan'
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

    public const ITEM_TYPE_UNKNOWN = 'UNKNOWN';
    public const ITEM_TYPE_SHIPPING = 'SHIPPING';
    public const ITEM_TYPE_TAX = 'TAX';
    public const ITEM_TYPE_SERVICE = 'SERVICE';
    public const ITEM_TYPE_PRODUCT = 'PRODUCT';
    public const ITEM_TYPE_UPSELL = 'UPSELL';
    public const ITEM_TYPE_FINANCE_CHARGE = 'FINANCE_CHARGE';
    public const ITEM_TYPE_DISCOUNT = 'DISCOUNT';
    public const ITEM_TYPE_PROGRAM = 'PROGRAM';
    public const ITEM_TYPE_SUBSCRIPTION = 'SUBSCRIPTION';
    public const ITEM_TYPE_DISCOUNT_FREE_TRIAL = 'DISCOUNT_FREE_TRIAL';
    public const ITEM_TYPE_DISCOUNT_ORDER_TOTAL = 'DISCOUNT_ORDER_TOTAL';
    public const ITEM_TYPE_DISCOUNT_PRODUCT = 'DISCOUNT_PRODUCT';
    public const ITEM_TYPE_DISCOUNT_PRODUCT_CATEGORY = 'DISCOUNT_PRODUCT_CATEGORY';
    public const ITEM_TYPE_DISCOUNT_SHIPPING = 'DISCOUNT_SHIPPING';
    public const ITEM_TYPE_TIP = 'TIP';
    public const ITEM_TYPE_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemTypeAllowableValues()
    {
        return [
            self::ITEM_TYPE_UNKNOWN,
            self::ITEM_TYPE_SHIPPING,
            self::ITEM_TYPE_TAX,
            self::ITEM_TYPE_SERVICE,
            self::ITEM_TYPE_PRODUCT,
            self::ITEM_TYPE_UPSELL,
            self::ITEM_TYPE_FINANCE_CHARGE,
            self::ITEM_TYPE_DISCOUNT,
            self::ITEM_TYPE_PROGRAM,
            self::ITEM_TYPE_SUBSCRIPTION,
            self::ITEM_TYPE_DISCOUNT_FREE_TRIAL,
            self::ITEM_TYPE_DISCOUNT_ORDER_TOTAL,
            self::ITEM_TYPE_DISCOUNT_PRODUCT,
            self::ITEM_TYPE_DISCOUNT_PRODUCT_CATEGORY,
            self::ITEM_TYPE_DISCOUNT_SHIPPING,
            self::ITEM_TYPE_TIP,
            self::ITEM_TYPE_OTHER,
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
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('item_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('order_item_taxes', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('special', $data ?? [], null);
        $this->setIfExists('subscription', $data ?? [], null);
        $this->setIfExists('subscription_id', $data ?? [], null);
        $this->setIfExists('subscription_plan', $data ?? [], null);
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

        $allowedValues = $this->getItemTypeAllowableValues();
        if (!is_null($this->container['item_type']) && !in_array($this->container['item_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'item_type', must be one of '%s'",
                $this->container['item_type'],
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
     * Gets cost
     *
     * @return \Keap\Core\V2\Model\CurrencyValue|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \Keap\Core\V2\Model\CurrencyValue|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \Keap\Core\V2\Model\CurrencyValue|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \Keap\Core\V2\Model\CurrencyValue|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

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
     * Gets item_type
     *
     * @return string|null
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     *
     * @param string|null $item_type item_type
     *
     * @return self
     */
    public function setItemType($item_type)
    {
        if (is_null($item_type)) {
            throw new \InvalidArgumentException('non-nullable item_type cannot be null');
        }
        $allowedValues = $this->getItemTypeAllowableValues();
        if (!in_array($item_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'item_type', must be one of '%s'",
                    $item_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets order_item_taxes
     *
     * @return \Keap\Core\V2\Model\OrderItemTax[]|null
     */
    public function getOrderItemTaxes()
    {
        return $this->container['order_item_taxes'];
    }

    /**
     * Sets order_item_taxes
     *
     * @param \Keap\Core\V2\Model\OrderItemTax[]|null $order_item_taxes order_item_taxes
     *
     * @return self
     */
    public function setOrderItemTaxes($order_item_taxes)
    {
        if (is_null($order_item_taxes)) {
            throw new \InvalidArgumentException('non-nullable order_item_taxes cannot be null');
        }
        $this->container['order_item_taxes'] = $order_item_taxes;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Keap\Core\V2\Model\CurrencyValue|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Keap\Core\V2\Model\CurrencyValue|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Keap\Core\V2\Model\OrderItemProduct|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Keap\Core\V2\Model\OrderItemProduct|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets special
     *
     * @return \Keap\Core\V2\Model\Discount|null
     */
    public function getSpecial()
    {
        return $this->container['special'];
    }

    /**
     * Sets special
     *
     * @param \Keap\Core\V2\Model\Discount|null $special special
     *
     * @return self
     */
    public function setSpecial($special)
    {
        if (is_null($special)) {
            throw new \InvalidArgumentException('non-nullable special cannot be null');
        }
        $this->container['special'] = $special;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \Keap\Core\V2\Model\RestV2Subscription|null
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Keap\Core\V2\Model\RestV2Subscription|null $subscription subscription
     *
     * @return self
     */
    public function setSubscription($subscription)
    {
        if (is_null($subscription)) {
            throw new \InvalidArgumentException('non-nullable subscription cannot be null');
        }
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string|null $subscription_id subscription_id
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {
        if (is_null($subscription_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_id cannot be null');
        }
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets subscription_plan
     *
     * @return \Keap\Core\V2\Model\RestSubscriptionPlan|null
     */
    public function getSubscriptionPlan()
    {
        return $this->container['subscription_plan'];
    }

    /**
     * Sets subscription_plan
     *
     * @param \Keap\Core\V2\Model\RestSubscriptionPlan|null $subscription_plan subscription_plan
     *
     * @return self
     */
    public function setSubscriptionPlan($subscription_plan)
    {
        if (is_null($subscription_plan)) {
            throw new \InvalidArgumentException('non-nullable subscription_plan cannot be null');
        }
        $this->container['subscription_plan'] = $subscription_plan;

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


