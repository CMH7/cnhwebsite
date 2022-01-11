<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/customer_client_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class CustomerClientService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v8/resources/customer_client.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerClientF
resource_name (	B/�A�A)
\'googleads.googleapis.com/CustomerClientG
client_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �
hidden (B�AH�
level (B�AH�
	time_zone (	B�AH�
test_account (B�AH�
manager (B�AH�"
descriptive_name (	B�AH�
currency_code (	B�AH�
id (B�AH�>
applied_labels (	B&�A�A 
googleads.googleapis.com/Label:j�Ag
\'googleads.googleapis.com/CustomerClient<customers/{customer_id}/customerClients/{client_customer_id}B
_client_customerB	
_hiddenB
_levelB

_time_zoneB
_test_accountB

_managerB
_descriptive_nameB
_currency_codeB
_idB�
%com.google.ads.googleads.v8.resourcesBCustomerClientProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
>google/ads/googleads/v8/services/customer_client_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"b
GetCustomerClientRequestF
resource_name (	B/�A�A)
\'googleads.googleapis.com/CustomerClient2�
CustomerClientService�
GetCustomerClient:.google.ads.googleads.v8.services.GetCustomerClientRequest1.google.ads.googleads.v8.resources.CustomerClient"I���31/v8/{resource_name=customers/*/customerClients/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBCustomerClientServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

