# VOP\Rest\BonigatewayblacklistApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bonigatewayBlacklistSetBlacklistPost**](BonigatewayblacklistApi.md#bonigatewayblacklistsetblacklistpost) | **POST** /bonigateway/blacklist/setBlacklist | 

# **bonigatewayBlacklistSetBlacklistPost**
> \VOP\Rest\Model\SuccessResponse bonigatewayBlacklistSetBlacklistPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayblacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\SetBlacklistInputParameters(); // \VOP\Rest\Model\SetBlacklistInputParameters | 

try {
    $result = $apiInstance->bonigatewayBlacklistSetBlacklistPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayblacklistApi->bonigatewayBlacklistSetBlacklistPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\SetBlacklistInputParameters**](../Model/SetBlacklistInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

