# VOP\Rest\OauthApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthTokenPost**](OauthApi.md#oauthtokenpost) | **POST** /oauth/token | 

# **oauthTokenPost**
> \VOP\Rest\Model\TokenResponseParameters oauthTokenPost()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VOP\Rest\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthTokenPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VOP\Rest\Model\TokenResponseParameters**](../Model/TokenResponseParameters.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

