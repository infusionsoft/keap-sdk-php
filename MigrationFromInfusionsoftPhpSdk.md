# Migrating from Infusionsoft PHP SDK to Keap PHP SDK

## Overview

This guide assists developers in transitioning from the legacy [Infusionsoft PHP SDK](https://github.com/infusionsoft/infusionsoft-php) to the modern [Keap PHP SDK](https://github.com/infusionsoft/keap-sdk-php/tree/main). It outlines key differences, installation steps, authentication methods, code migration examples, best practices, and resources to facilitate a smooth migration.

## Key Differences

- **Namespace and Package**: The new SDK uses the `Keap` namespace and is available as `keap/keap-sdk` on Packagist.
- **Authentication**: OAuth 2.0 is the primary authentication method, replacing legacy API keys.
- **HTTP Client**: Built on top of Guzzle HTTP client for better HTTP handling.
- **API Coverage**: Supports the latest Keap REST APIs with improved type safety and request/response models.
- **Error Handling**: Enhanced error handling with exceptions and detailed error objects.

## Installation

Install the new SDK via Composer:

```bash
composer require keap/keap-sdk
```

## Authentication

### Old SDK (Infusionsoft PHP SDK)

Typically used API keys or legacy methods:

```php
use Infusionsoft\Infusionsoft;

$infusionsoft = new Infusionsoft(array(
    'clientId'     => 'yourClientId',
    'clientSecret' => 'yourClientSecret',
    'redirectUri'  => 'yourRedirectUri',
));

$infusionsoft->setToken(new Token(array(
    'access_token'  => 'yourAccessToken',
    'refresh_token' => 'yourRefreshToken',
    'expires_in'    => 3600,
    'created_at'    => time(),
)));
```

### New SDK (Keap PHP SDK)

Use OAuth 2.0 flow with the new client:

```php
use Keap\KeapClient;
use Keap\OAuth2\Client\Provider\Keap;

$provider = new Keap([
    'clientId'     => 'yourClientId',
    'clientSecret' => 'yourClientSecret',
    'redirectUri'  => 'yourRedirectUri',
]);

// After obtaining authorization code:
$accessToken = $provider->getAccessToken('authorization_code', [
    'code' => $authorizationCode
]);

$client = new KeapClient($accessToken);
```

## Code Migration Examples

### Listing Contacts

**Old SDK:**

```php
$contacts = $infusionsoft->contacts()->all();
$contact = $infusionsoft->contacts()->where('email', 'john@doe.com')->first();
echo 'Contact ID found: ' . $contact->id . ', Last Name: ' . $contact->family_name . PHP_EOL;
```

**New SDK:**

```php
use Keap\Core\V2\Api\ContactApi;
use Keap\Core\V2\Configuration;
use Keap\Core\V2\HeaderSelector;
use GuzzleHttp\Client;


$config = new Configuration();
$config->setAccessToken($accessToken);

// Inline class inheriting from HeaderSelector to add Authorization header
$headerSelector = new class extends HeaderSelector {
    public function selectHeaders(array $accept, string $contentType, bool $isMultipart): array
    {
        $headers = parent::selectHeaders($accept, $contentType, $isMultipart);
        $headers['Authorization'] = 'Bearer ' . getenv('KEAP_REST_API_SERVICE_ACCESS_TOKEN');
        return $headers;
    }
};

$client = new Client();
$contactApi = new ContactApi($client, $config, $headerSelector);

$response = $contactApi->listContacts(
    filter: 'email==john@doe.com',
    page_size: 1                    // if you only want the first match
);

foreach ($response->getContacts() as $contact) {
    echo 'Contact ID: ' . $contact->getId() . ', Last Name: ' . $contact->getFamilyName() . PHP_EOL;
}
```

### Updating a Contact

**Old SDK:**

```php
$contact = $infusionsoft->contacts()->find($contactId);
$contact->email_addresses = 'newemail@example.com';
$infusionsoft->contacts()->update($contactId, $contact);
```

**New SDK:**

```php
use Keap\Core\V2\Model\CreateUpdateContactRequest;

// Step 1: Prepare the request payload
$request = new CreateUpdateContactRequest();
$request->setGivenName('UpdatedFirstName');
$request->setFamilyName('UpdatedLastName');

// Step 2: Define the update mask (optional but recommended)
$updateMask = ['given_name', 'family_name'];

// Step 3: Call the updateContactUsingPATCH method
$updatedContact = $contactApi->updateContact(
    contact_id: $contact->getId(),
    update_mask: $updateMask,
    create_update_contact_request: $request
);

echo '✅ Contact updated! New Name: ' . $updatedContact->getGivenName() . ' ' . $updatedContact->getFamilyName() . '<br>';
```

## Best Practices

- **Use OAuth 2.0**: Migrate authentication to OAuth 2.0 for better security and compliance.
- **Handle Exceptions**: Use try-catch blocks to handle API exceptions gracefully.
- **Pagination**: Use pagination methods provided by the SDK for large datasets.
- **Stay Updated**: Keep the SDK updated to benefit from new features and fixes.
- **Review API Changes**: Some endpoints and fields may have changed; refer to the official API documentation.

## Resources

- [Keap PHP SDK GitHub Repository](https://github.com/infusionsoft/keap-sdk-php/tree/main)
- [Keap API Documentation](https://developer.keap.com/docs/rest/)
- [OAuth 2.0 Guide](https://developer.keap.com/docs/rest/oauth/)
- [Keap SDK on Packagist](https://packagist.org/packages/keap/keap-sdk)

## Conclusion

Migrating to the Keap PHP SDK provides a more robust, secure, and up-to-date integration with Keap's platform. By following this guide and referring to the official documentation, developers can transition their applications smoothly and leverage the latest API features.
