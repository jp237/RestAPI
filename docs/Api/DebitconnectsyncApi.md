# VOP\Rest\DebitconnectsyncApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debitconnectSyncCaseGetSyncListGet**](DebitconnectsyncApi.md#debitconnectsynccasegetsynclistget) | **GET** /debitconnect/sync/case/getSyncList | 
[**debitconnectSyncCaseGetSyncPost**](DebitconnectsyncApi.md#debitconnectsynccasegetsyncpost) | **POST** /debitconnect/sync/case/getSync | 
[**debitconnectSyncCasePushSyncPost**](DebitconnectsyncApi.md#debitconnectsynccasepushsyncpost) | **POST** /debitconnect/sync/case/pushSync | 
[**debitconnectSyncCompareVersionPost**](DebitconnectsyncApi.md#debitconnectsynccompareversionpost) | **POST** /debitconnect/sync/compareVersion | 

# **debitconnectSyncCaseGetSyncListGet**
> \VOP\Rest\Model\GetSyncListResponseParameters debitconnectSyncCaseGetSyncListGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->debitconnectSyncCaseGetSyncListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectsyncApi->debitconnectSyncCaseGetSyncListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\GetSyncListResponseParameters**](../Model/GetSyncListResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectSyncCaseGetSyncPost**
> \VOP\Rest\Model\GetSyncResponseParameters debitconnectSyncCaseGetSyncPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\GetSyncInputParameters(); // \VOP\Rest\Model\GetSyncInputParameters | 

try {
    $result = $apiInstance->debitconnectSyncCaseGetSyncPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectsyncApi->debitconnectSyncCaseGetSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\GetSyncInputParameters**](../Model/GetSyncInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\GetSyncResponseParameters**](../Model/GetSyncResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectSyncCasePushSyncPost**
> \VOP\Rest\Model\SuccessResponse debitconnectSyncCasePushSyncPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\PushSyncInputParameters(); // \VOP\Rest\Model\PushSyncInputParameters | 

try {
    $result = $apiInstance->debitconnectSyncCasePushSyncPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectsyncApi->debitconnectSyncCasePushSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\PushSyncInputParameters**](../Model/PushSyncInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectSyncCompareVersionPost**
> \VOP\Rest\Model\CompareVersionResponseParameters debitconnectSyncCompareVersionPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VOP\Rest\Api\DebitconnectsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \VOP\Rest\Model\CompareVersionInputParameters(); // \VOP\Rest\Model\CompareVersionInputParameters | 

try {
    $result = $apiInstance->debitconnectSyncCompareVersionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectsyncApi->debitconnectSyncCompareVersionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\CompareVersionInputParameters**](../Model/CompareVersionInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\CompareVersionResponseParameters**](../Model/CompareVersionResponseParameters.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

