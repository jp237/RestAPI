# VOP\Rest\BonigatewayresultApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bonigatewayResultGetResponseDataByIdIdGet**](BonigatewayresultApi.md#bonigatewayresultgetresponsedatabyididget) | **GET** /bonigateway/result/getResponseDataById/{id} | 
[**bonigatewayResultGetResponseDataByOrderNumberOrderNumberGet**](BonigatewayresultApi.md#bonigatewayresultgetresponsedatabyordernumberordernumberget) | **GET** /bonigateway/result/getResponseDataByOrderNumber/{orderNumber} | 
[**bonigatewayResultGetResponseDocumentByIdIdTypeGet**](BonigatewayresultApi.md#bonigatewayresultgetresponsedocumentbyididtypeget) | **GET** /bonigateway/result/getResponseDocumentById/{id}/{type} | 

# **bonigatewayResultGetResponseDataByIdIdGet**
> \VOP\Rest\Model\CustomDataResponse bonigatewayResultGetResponseDataByIdIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayresultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->bonigatewayResultGetResponseDataByIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayresultApi->bonigatewayResultGetResponseDataByIdIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VOP\Rest\Model\CustomDataResponse**](../Model/CustomDataResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayResultGetResponseDataByOrderNumberOrderNumberGet**
> \VOP\Rest\Model\CustomDataResponse bonigatewayResultGetResponseDataByOrderNumberOrderNumberGet($order_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayresultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = "order_number_example"; // string | 

try {
    $result = $apiInstance->bonigatewayResultGetResponseDataByOrderNumberOrderNumberGet($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayresultApi->bonigatewayResultGetResponseDataByOrderNumberOrderNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**|  |

### Return type

[**\VOP\Rest\Model\CustomDataResponse**](../Model/CustomDataResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayResultGetResponseDocumentByIdIdTypeGet**
> bonigatewayResultGetResponseDocumentByIdIdTypeGet($id, $type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayresultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$type = "type_example"; // string | 

try {
    $apiInstance->bonigatewayResultGetResponseDocumentByIdIdTypeGet($id, $type);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayresultApi->bonigatewayResultGetResponseDocumentByIdIdTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **type** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

