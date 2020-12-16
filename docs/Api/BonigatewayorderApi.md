# VOP\Rest\BonigatewayorderApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bonigatewayOrderCompleteOrderPost**](BonigatewayorderApi.md#bonigatewayordercompleteorderpost) | **POST** /bonigateway/order/completeOrder | 

# **bonigatewayOrderCompleteOrderPost**
> \VOP\Rest\Model\SuccessResponse bonigatewayOrderCompleteOrderPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayorderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\CompleteOrderInputParameters(); // \VOP\Rest\Model\CompleteOrderInputParameters | 

try {
    $result = $apiInstance->bonigatewayOrderCompleteOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayorderApi->bonigatewayOrderCompleteOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\CompleteOrderInputParameters**](../Model/CompleteOrderInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

