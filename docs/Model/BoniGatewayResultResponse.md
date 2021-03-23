# BoniGatewayResultResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **string** | internal id request | [optional] 
**cached_internal_id** | **string** | internal id from the cached response | [optional] 
**address_data** | [**\VOP\Rest\Model\AddressData**](AddressData.md) |  | [optional] 
**score** | [**\VOP\Rest\Model\ScoreInformation**](ScoreInformation.md) |  | [optional] 
**product_code** | **int** | Product code of response | [optional] 
**secure_payment** | **bool** | flag to secure payment | [optional] 
**raw_data** | **object** | raw data of response | [optional] 
**document** | **object** | base64encoded document | [optional] 
**project** | [**\VOP\Rest\Model\ProjectInformation**](ProjectInformation.md) |  | [optional] 
**additional_texts** | **string[]** | Additional Text Responses | [optional] 
**identity_flags** | [**\VOP\Rest\Model\PrivatIdentityFlags**](PrivatIdentityFlags.md) |  | [optional] 
**logs** | **string[]** | additional loggin data | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

