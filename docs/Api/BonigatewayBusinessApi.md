# VOP\Rest\BonigatewaybusinessApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bonigatewayBusinessGetBusinessListPost**](BonigatewaybusinessApi.md#bonigatewaybusinessgetbusinesslistpost) | **POST** /bonigateway/business/getBusinessList | 
[**bonigatewayBusinessGetBusinessReportProductAccountIdIdReasonResellingGet**](BonigatewaybusinessApi.md#bonigatewaybusinessgetbusinessreportproductaccountididreasonresellingget) | **GET** /bonigateway/business/getBusinessReport/{product}/{accountId}/{id}/{reason}/{reselling} | 
[**bonigatewayBusinessGetProductListGet**](BonigatewaybusinessApi.md#bonigatewaybusinessgetproductlistget) | **GET** /bonigateway/business/getProductList | 
[**bonigatewayBusinessGetRequestBusinessGetDocumentResellingPost**](BonigatewaybusinessApi.md#bonigatewaybusinessgetrequestbusinessgetdocumentresellingpost) | **POST** /bonigateway/business/getRequestBusiness/{getDocument}/{reselling} | 

# **bonigatewayBusinessGetBusinessListPost**
> \VOP\Rest\Model\GetBusinessListResponseParameters bonigatewayBusinessGetBusinessListPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewaybusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\GetBusinessListInputParameters(); // \VOP\Rest\Model\GetBusinessListInputParameters | 

try {
    $result = $apiInstance->bonigatewayBusinessGetBusinessListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewaybusinessApi->bonigatewayBusinessGetBusinessListPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\GetBusinessListInputParameters**](../Model/GetBusinessListInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\GetBusinessListResponseParameters**](../Model/GetBusinessListResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayBusinessGetBusinessReportProductAccountIdIdReasonResellingGet**
> \VOP\Rest\Model\BoniGatewayResultResponse bonigatewayBusinessGetBusinessReportProductAccountIdIdReasonResellingGet($id, $reselling, $account_id, $reason, $product)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewaybusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$reselling = true; // bool | 
$account_id = "account_id_example"; // string | 
$reason = "reason_example"; // string | 
$product = 56; // int | 

try {
    $result = $apiInstance->bonigatewayBusinessGetBusinessReportProductAccountIdIdReasonResellingGet($id, $reselling, $account_id, $reason, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewaybusinessApi->bonigatewayBusinessGetBusinessReportProductAccountIdIdReasonResellingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **reselling** | **bool**|  |
 **account_id** | **string**|  |
 **reason** | **string**|  |
 **product** | **int**|  |

### Return type

[**\VOP\Rest\Model\BoniGatewayResultResponse**](../Model/BoniGatewayResultResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayBusinessGetProductListGet**
> \VOP\Rest\Model\GetProductListResponseParameters bonigatewayBusinessGetProductListGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewaybusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bonigatewayBusinessGetProductListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewaybusinessApi->bonigatewayBusinessGetProductListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\GetProductListResponseParameters**](../Model/GetProductListResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayBusinessGetRequestBusinessGetDocumentResellingPost**
> \VOP\Rest\Model\BoniGatewayResultResponse bonigatewayBusinessGetRequestBusinessGetDocumentResellingPost($get_document, $reselling, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewaybusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_document = true; // bool | 
$reselling = true; // bool | 
$body = new \VOP\Rest\Model\GetRequestBusinessInputParameters(); // \VOP\Rest\Model\GetRequestBusinessInputParameters | 

try {
    $result = $apiInstance->bonigatewayBusinessGetRequestBusinessGetDocumentResellingPost($get_document, $reselling, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewaybusinessApi->bonigatewayBusinessGetRequestBusinessGetDocumentResellingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_document** | **bool**|  |
 **reselling** | **bool**|  |
 **body** | [**\VOP\Rest\Model\GetRequestBusinessInputParameters**](../Model/GetRequestBusinessInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\BoniGatewayResultResponse**](../Model/BoniGatewayResultResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

