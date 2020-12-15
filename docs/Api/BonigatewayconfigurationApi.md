# VOP\Rest\BonigatewayconfigurationApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bonigatewayConfigurationGetAccountListGet**](BonigatewayconfigurationApi.md#bonigatewayconfigurationgetaccountlistget) | **GET** /bonigateway/configuration/getAccountList | 
[**bonigatewayConfigurationGetProjectInformationGet**](BonigatewayconfigurationApi.md#bonigatewayconfigurationgetprojectinformationget) | **GET** /bonigateway/configuration/getProjectInformation | 
[**bonigatewayConfigurationGetResellingPriceListGet**](BonigatewayconfigurationApi.md#bonigatewayconfigurationgetresellingpricelistget) | **GET** /bonigateway/configuration/getResellingPriceList | 

# **bonigatewayConfigurationGetAccountListGet**
> \VOP\Rest\Model\GetAccountListResponseParameters bonigatewayConfigurationGetAccountListGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayconfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bonigatewayConfigurationGetAccountListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayconfigurationApi->bonigatewayConfigurationGetAccountListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\GetAccountListResponseParameters**](../Model/GetAccountListResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayConfigurationGetProjectInformationGet**
> \VOP\Rest\Model\GetProjectInformationResponseParameters bonigatewayConfigurationGetProjectInformationGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayconfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bonigatewayConfigurationGetProjectInformationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayconfigurationApi->bonigatewayConfigurationGetProjectInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\GetProjectInformationResponseParameters**](../Model/GetProjectInformationResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bonigatewayConfigurationGetResellingPriceListGet**
> \VOP\Rest\Model\GetResellingPriceListResponseParameters bonigatewayConfigurationGetResellingPriceListGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayconfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bonigatewayConfigurationGetResellingPriceListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayconfigurationApi->bonigatewayConfigurationGetResellingPriceListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\GetResellingPriceListResponseParameters**](../Model/GetResellingPriceListResponseParameters.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

