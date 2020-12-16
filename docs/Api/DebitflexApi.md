# VOP\Rest\DebitflexApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debitflexGetInformationSecuritytokenGet**](DebitflexApi.md#debitflexgetinformationsecuritytokenget) | **GET** /debitflex/getInformation/{securitytoken} | 

# **debitflexGetInformationSecuritytokenGet**
> \VOP\Rest\Model\GetInformationResponseParameters debitflexGetInformationSecuritytokenGet($securitytoken)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitflexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securitytoken = "securitytoken_example"; // string | 

try {
    $result = $apiInstance->debitflexGetInformationSecuritytokenGet($securitytoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitflexApi->debitflexGetInformationSecuritytokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securitytoken** | **string**|  |

### Return type

[**\VOP\Rest\Model\GetInformationResponseParameters**](../Model/GetInformationResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

