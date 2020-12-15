# VOP\Rest\DebitconnectorderApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debitconnectOrderEmailPaymentPromptPost**](DebitconnectorderApi.md#debitconnectorderemailpaymentpromptpost) | **POST** /debitconnect/order/emailPaymentPrompt | 
[**debitconnectOrderGetCatalogueNumbersGet**](DebitconnectorderApi.md#debitconnectordergetcataloguenumbersget) | **GET** /debitconnect/order/getCatalogueNumbers/ | 
[**debitconnectOrderNewOrderPost**](DebitconnectorderApi.md#debitconnectorderneworderpost) | **POST** /debitconnect/order/newOrder | 

# **debitconnectOrderEmailPaymentPromptPost**
> \VOP\Rest\Model\SuccessResponse debitconnectOrderEmailPaymentPromptPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectorderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\EmailPaymentPromptInputParameters(); // \VOP\Rest\Model\EmailPaymentPromptInputParameters | 

try {
    $result = $apiInstance->debitconnectOrderEmailPaymentPromptPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectorderApi->debitconnectOrderEmailPaymentPromptPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\EmailPaymentPromptInputParameters**](../Model/EmailPaymentPromptInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectOrderGetCatalogueNumbersGet**
> \VOP\Rest\Model\GetCatalogueNumbersResponseParameters debitconnectOrderGetCatalogueNumbersGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectorderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->debitconnectOrderGetCatalogueNumbersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectorderApi->debitconnectOrderGetCatalogueNumbersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\GetCatalogueNumbersResponseParameters**](../Model/GetCatalogueNumbersResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectOrderNewOrderPost**
> \VOP\Rest\Model\SuccessResponse debitconnectOrderNewOrderPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectorderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\NewOrderInputParameters(); // \VOP\Rest\Model\NewOrderInputParameters | 

try {
    $result = $apiInstance->debitconnectOrderNewOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectorderApi->debitconnectOrderNewOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\NewOrderInputParameters**](../Model/NewOrderInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

