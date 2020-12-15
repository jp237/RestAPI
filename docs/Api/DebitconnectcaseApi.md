# VOP\Rest\DebitconnectcaseApi

All URIs are relative to *https://rest.eaponline.de*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debitconnectCaseGetCaseDocumentByIdPost**](DebitconnectcaseApi.md#debitconnectcasegetcasedocumentbyidpost) | **POST** /debitconnect/case/getCaseDocumentById | 
[**debitconnectCaseGetCaseInformationPost**](DebitconnectcaseApi.md#debitconnectcasegetcaseinformationpost) | **POST** /debitconnect/case/getCaseInformation | 
[**debitconnectCasePushMessagePost**](DebitconnectcaseApi.md#debitconnectcasepushmessagepost) | **POST** /debitconnect/case/pushMessage | 
[**debitconnectCaseSubmitDocumentPost**](DebitconnectcaseApi.md#debitconnectcasesubmitdocumentpost) | **POST** /debitconnect/case/submitDocument | 

# **debitconnectCaseGetCaseDocumentByIdPost**
> \VOP\Rest\Model\DocumentResponse debitconnectCaseGetCaseDocumentByIdPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectcaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\GetCaseDocumentByIdInputParameters(); // \VOP\Rest\Model\GetCaseDocumentByIdInputParameters | 

try {
    $result = $apiInstance->debitconnectCaseGetCaseDocumentByIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectcaseApi->debitconnectCaseGetCaseDocumentByIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\GetCaseDocumentByIdInputParameters**](../Model/GetCaseDocumentByIdInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectCaseGetCaseInformationPost**
> \VOP\Rest\Model\CaseInformation debitconnectCaseGetCaseInformationPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectcaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\GetCaseInformationInputParameters(); // \VOP\Rest\Model\GetCaseInformationInputParameters | 

try {
    $result = $apiInstance->debitconnectCaseGetCaseInformationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectcaseApi->debitconnectCaseGetCaseInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\GetCaseInformationInputParameters**](../Model/GetCaseInformationInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\CaseInformation**](../Model/CaseInformation.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectCasePushMessagePost**
> \VOP\Rest\Model\SuccessResponse debitconnectCasePushMessagePost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectcaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\PushMessageInputParameters(); // \VOP\Rest\Model\PushMessageInputParameters | 

try {
    $result = $apiInstance->debitconnectCasePushMessagePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectcaseApi->debitconnectCasePushMessagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\PushMessageInputParameters**](../Model/PushMessageInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debitconnectCaseSubmitDocumentPost**
> \VOP\Rest\Model\SuccessResponse debitconnectCaseSubmitDocumentPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\DebitconnectcaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VOP\Rest\Model\SubmitDocumentInputParameters(); // \VOP\Rest\Model\SubmitDocumentInputParameters | 

try {
    $result = $apiInstance->debitconnectCaseSubmitDocumentPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebitconnectcaseApi->debitconnectCaseSubmitDocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VOP\Rest\Model\SubmitDocumentInputParameters**](../Model/SubmitDocumentInputParameters.md)|  | [optional]

### Return type

[**\VOP\Rest\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[apiAuth](../../README.md#apiAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

