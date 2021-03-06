# TrackMage\Client\Swagger\UserResendEmailRequestApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postUserResendEmailRequestCollection**](UserResendEmailRequestApi.md#postUserResendEmailRequestCollection) | **POST** /security/resend-email | Creates a UserResendEmailRequest resource.



## postUserResendEmailRequestCollection

> \TrackMage\Client\Swagger\Model\UserResendEmailRequest postUserResendEmailRequestCollection($userResendEmailRequest)

Creates a UserResendEmailRequest resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\UserResendEmailRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userResendEmailRequest = new \TrackMage\Client\Swagger\Model\UserResendEmailRequest(); // \TrackMage\Client\Swagger\Model\UserResendEmailRequest | The new UserResendEmailRequest resource

try {
    $result = $apiInstance->postUserResendEmailRequestCollection($userResendEmailRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserResendEmailRequestApi->postUserResendEmailRequestCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userResendEmailRequest** | [**\TrackMage\Client\Swagger\Model\UserResendEmailRequest**](../Model/UserResendEmailRequest.md)| The new UserResendEmailRequest resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\UserResendEmailRequest**](../Model/UserResendEmailRequest.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

