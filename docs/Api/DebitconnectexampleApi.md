# VOP\Rest\DebitconnectexampleApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet**](DebitconnectexampleApi.md#debitconnectexamplegetexampledocumentbyidsecuritytokenidget) | **GET** /debitconnect/example/getExampleDocumentById/{securitytoken}/{id} | 
[**debitconnectExampleGetExampleListSecuritytokenGet**](DebitconnectexampleApi.md#debitconnectexamplegetexamplelistsecuritytokenget) | **GET** /debitconnect/example/getExampleList/{securitytoken} | 

# **debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet**
> \VOP\Rest\Model\GetExampleDocumentByIdResponseParameters debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet($securitytoken, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VOP\Rest\Api\DebitconnectexampleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$securitytoken = "securitytoken_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet($securitytoken, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectexampleApi->debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securitytoken** | **string**|  |
 **id** | **string**|  |

### Return type

[**\VOP\Rest\Model\GetExampleDocumentByIdResponseParameters**](../Model/GetExampleDocumentByIdResponseParameters.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectExampleGetExampleListSecuritytokenGet**
> \VOP\Rest\Model\GetExampleListResponseParameters debitconnectExampleGetExampleListSecuritytokenGet($securitytoken)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VOP\Rest\Api\DebitconnectexampleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$securitytoken = "securitytoken_example"; // string | 

try {
    $result = $apiInstance->debitconnectExampleGetExampleListSecuritytokenGet($securitytoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectexampleApi->debitconnectExampleGetExampleListSecuritytokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securitytoken** | **string**|  |

### Return type

[**\VOP\Rest\Model\GetExampleListResponseParameters**](../Model/GetExampleListResponseParameters.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

