# VOP\Rest\DebitconnectfinAPIApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debitconnectFinAPIGetTokenPost**](DebitconnectfinAPIApi.md#debitconnectfinapigettokenpost) | **POST** /debitconnect/finAPI/getToken | 

# **debitconnectFinAPIGetTokenPost**
> \VOP\Rest\Model\GetTokenResponseParameters debitconnectFinAPIGetTokenPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectfinAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\GetTokenInputParameters(); // \VOP\Rest\Model\GetTokenInputParameters | 

try {
    $result = $apiInstance->debitconnectFinAPIGetTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectfinAPIApi->debitconnectFinAPIGetTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\GetTokenInputParameters**](../Model/GetTokenInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\GetTokenResponseParameters**](../Model/GetTokenResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

