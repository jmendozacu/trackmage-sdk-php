# TrackMage\Client\Swagger\TeamApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsTeamMembersGetSubresource**](TeamApi.md#apiTeamsTeamMembersGetSubresource) | **GET** /teams/{id}/team_members | Retrieves the collection of TeamMember resources.
[**apiTeamsWorkspacesGetSubresource**](TeamApi.md#apiTeamsWorkspacesGetSubresource) | **GET** /teams/{id}/workspaces | Retrieves the collection of Workspace resources.
[**deleteTeamItem**](TeamApi.md#deleteTeamItem) | **DELETE** /teams/{id} | Removes the Team resource.
[**getTeamCollection**](TeamApi.md#getTeamCollection) | **GET** /teams | Retrieves the collection of Team resources.
[**getTeamItem**](TeamApi.md#getTeamItem) | **GET** /teams/{id} | Retrieves a Team resource.
[**postTeamCollection**](TeamApi.md#postTeamCollection) | **POST** /teams | Creates a Team resource.
[**putTeamItem**](TeamApi.md#putTeamItem) | **PUT** /teams/{id} | Replaces the Team resource.



## apiTeamsTeamMembersGetSubresource

> \TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams[] apiTeamsTeamMembersGetSubresource($id, $teamId, $teamId2, $memberId, $memberId2)

Retrieves the collection of TeamMember resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$teamId = 56; // int | 
$teamId2 = array(56); // int[] | 
$memberId = 56; // int | 
$memberId2 = array(56); // int[] | 

try {
    $result = $apiInstance->apiTeamsTeamMembersGetSubresource($id, $teamId, $teamId2, $memberId, $memberId2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsTeamMembersGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **teamId** | **int**|  | [optional]
 **teamId2** | [**int[]**](../Model/int.md)|  | [optional]
 **memberId** | **int**|  | [optional]
 **memberId2** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TeamMemberGetTeamMemberGetTeams[]**](../Model/TeamMemberGetTeamMemberGetTeams.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## apiTeamsWorkspacesGetSubresource

> \TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort[] apiTeamsWorkspacesGetSubresource($id, $orderCreatedAt)

Retrieves the collection of Workspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->apiTeamsWorkspacesGetSubresource($id, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsWorkspacesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\WorkspaceGetWorkspaceGetMediaShort[]**](../Model/WorkspaceGetWorkspaceGetMediaShort.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTeamItem

> deleteTeamItem($id)

Removes the Team resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->deleteTeamItem($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeamItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamCollection

> \TrackMage\Client\Swagger\Model\TeamGetTeam[] getTeamCollection($page, $itemsPerPage)

Retrieves the collection of Team resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The collection page number
$itemsPerPage = 56; // int | The number of items per page

try {
    $result = $apiInstance->getTeamCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional]
 **itemsPerPage** | **int**| The number of items per page | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TeamGetTeam[]**](../Model/TeamGetTeam.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTeamItem

> \TrackMage\Client\Swagger\Model\TeamGetTeam getTeamItem($id)

Retrieves a Team resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getTeamItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getTeamItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\TrackMage\Client\Swagger\Model\TeamGetTeam**](../Model/TeamGetTeam.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postTeamCollection

> \TrackMage\Client\Swagger\Model\TeamGetTeam postTeamCollection($team)

Creates a Team resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team = new \TrackMage\Client\Swagger\Model\TeamSetTeam(); // \TrackMage\Client\Swagger\Model\TeamSetTeam | The new Team resource

try {
    $result = $apiInstance->postTeamCollection($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postTeamCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team** | [**\TrackMage\Client\Swagger\Model\TeamSetTeam**](../Model/TeamSetTeam.md)| The new Team resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TeamGetTeam**](../Model/TeamGetTeam.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putTeamItem

> \TrackMage\Client\Swagger\Model\TeamGetTeam putTeamItem($id, $team)

Replaces the Team resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TrackMage\Client\Swagger\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TrackMage\Client\Swagger\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$team = new \TrackMage\Client\Swagger\Model\TeamSetTeam(); // \TrackMage\Client\Swagger\Model\TeamSetTeam | The updated Team resource

try {
    $result = $apiInstance->putTeamItem($id, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->putTeamItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **team** | [**\TrackMage\Client\Swagger\Model\TeamSetTeam**](../Model/TeamSetTeam.md)| The updated Team resource | [optional]

### Return type

[**\TrackMage\Client\Swagger\Model\TeamGetTeam**](../Model/TeamGetTeam.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: application/ld+json, application/json, text/csv, text/html
- **Accept**: application/ld+json, application/json, text/csv, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

