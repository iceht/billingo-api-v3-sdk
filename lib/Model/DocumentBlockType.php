<?php
/**
 * DocumentBlockType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.14
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * DocumentBlockType Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentBlockType
{
    /**
     * Possible values of this enum
     */
    const CERTIFICATE_OF_COMPLETION = 'certificate_of_completion';
const DOSSIER = 'dossier';
const INVOICE = 'invoice';
const OFFER = 'offer';
const ORDER_FORM = 'order_form';
const RECEIPT = 'receipt';
const WAYBILL = 'waybill';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CERTIFICATE_OF_COMPLETION,
self::DOSSIER,
self::INVOICE,
self::OFFER,
self::ORDER_FORM,
self::RECEIPT,
self::WAYBILL,        ];
    }
}
