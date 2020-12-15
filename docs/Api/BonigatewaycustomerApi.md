# VOP\Rest\BonigatewaycustomerApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bonigatewayCustomerGetRequestCustomerGetDocumentPost**](BonigatewaycustomerApi.md#bonigatewaycustomergetrequestcustomergetdocumentpost) | **POST** /bonigateway/customer/getRequestCustomer/{getDocument} | 
[**bonigatewayCustomerGetRequestCustomerResellingPost**](BonigatewaycustomerApi.md#bonigatewaycustomergetrequestcustomerresellingpost) | **POST** /bonigateway/customer/getRequestCustomerReselling | 
[**bonigatewayCustomerVerifyAgeGetDocumentPost**](BonigatewaycustomerApi.md#bonigatewaycustomerverifyagegetdocumentpost) | **POST** /bonigateway/customer/verifyAge/{getDocument} | 

# **bonigatewayCustomerGetRequestCustomerGetDocumentPost**
> \VOP\Rest\Model\BoniGatewayResultResponse bonigatewayCustomerGetRequestCustomerGetDocumentPost($get_document, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewaycustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_document = true; // bool | 
$body = new \VOP\Rest\Model\GetRequestCustomerInputParameters(); // \VOP\Rest\Model\GetRequestCustomerInputParameters | 

try {
    $result = $apiInstance->bonigatewayCustomerGetRequestCustomerGetDocumentPost($get_document, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewaycustomerApi->bonigatewayCustomerGetRequestCustomerGetDocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_document** | **bool**|  |
 **body** | [**\VOP\Rest\Model\GetRequestCustomerInputParameters**](../Model/GetRequestCustomerInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\BoniGatewayResultResponse**](../Model/BoniGatewayResultResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayCustomerGetRequestCustomerResellingPost**
> \VOP\Rest\Model\BoniGatewayResultResponse bonigatewayCustomerGetRequestCustomerResellingPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewaycustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\GetRequestCustomerResellingInputParameters(); // \VOP\Rest\Model\GetRequestCustomerResellingInputParameters | 

try {
    $result = $apiInstance->bonigatewayCustomerGetRequestCustomerResellingPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewaycustomerApi->bonigatewayCustomerGetRequestCustomerResellingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\GetRequestCustomerResellingInputParameters**](../Model/GetRequestCustomerResellingInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\BoniGatewayResultResponse**](../Model/BoniGatewayResultResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayCustomerVerifyAgeGetDocumentPost**
> \VOP\Rest\Model\BoniGatewayResultResponse bonigatewayCustomerVerifyAgeGetDocumentPost($get_document, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewaycustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_document = true; // bool | 
$body = new \VOP\Rest\Model\VerifyAgeInputParameters(); // \VOP\Rest\Model\VerifyAgeInputParameters | 

try {
    $result = $apiInstance->bonigatewayCustomerVerifyAgeGetDocumentPost($get_document, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewaycustomerApi->bonigatewayCustomerVerifyAgeGetDocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_document** | **bool**|  |
 **body** | [**\VOP\Rest\Model\VerifyAgeInputParameters**](../Model/VerifyAgeInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\BoniGatewayResultResponse**](../Model/BoniGatewayResultResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

