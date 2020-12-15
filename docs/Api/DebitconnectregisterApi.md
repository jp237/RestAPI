# VOP\Rest\DebitconnectregisterApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debitconnectRegisterActivateCustomerGet**](DebitconnectregisterApi.md#debitconnectregisteractivatecustomerget) | **GET** /debitconnect/register/activateCustomer | 
[**debitconnectRegisterRegisterCustomerSecuritytokenPost**](DebitconnectregisterApi.md#debitconnectregisterregistercustomersecuritytokenpost) | **POST** /debitconnect/register/registerCustomer/{securitytoken} | 
[**debitconnectRegisterResendConfirmationEmailGet**](DebitconnectregisterApi.md#debitconnectregisterresendconfirmationemailget) | **GET** /debitconnect/register/resendConfirmationEmail | 

# **debitconnectRegisterActivateCustomerGet**
> \VOP\Rest\Model\SuccessResponse debitconnectRegisterActivateCustomerGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->debitconnectRegisterActivateCustomerGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectregisterApi->debitconnectRegisterActivateCustomerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectRegisterRegisterCustomerSecuritytokenPost**
> \VOP\Rest\Model\RegisterCustomerResponseParameters debitconnectRegisterRegisterCustomerSecuritytokenPost($securitytoken, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VOP\Rest\Api\DebitconnectregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$securitytoken = "securitytoken_example"; // string | 
$body = new \VOP\Rest\Model\RegisterCustomerInputParameters(); // \VOP\Rest\Model\RegisterCustomerInputParameters | 

try {
    $result = $apiInstance->debitconnectRegisterRegisterCustomerSecuritytokenPost($securitytoken, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectregisterApi->debitconnectRegisterRegisterCustomerSecuritytokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securitytoken** | **string**|  |
 **body** | [**\VOP\Rest\Model\RegisterCustomerInputParameters**](../Model/RegisterCustomerInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\RegisterCustomerResponseParameters**](../Model/RegisterCustomerResponseParameters.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectRegisterResendConfirmationEmailGet**
> \VOP\Rest\Model\SuccessResponse debitconnectRegisterResendConfirmationEmailGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->debitconnectRegisterResendConfirmationEmailGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectregisterApi->debitconnectRegisterResendConfirmationEmailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

