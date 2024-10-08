<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for
 * [CatalogService.AddCatalogAttribute][google.cloud.retail.v2.CatalogService.AddCatalogAttribute]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.AddCatalogAttributeRequest</code>
 */
class AddCatalogAttributeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full AttributesConfig resource name. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/attributesConfig`
     *
     * Generated from protobuf field <code>string attributes_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $attributes_config = '';
    /**
     * Required. The [CatalogAttribute][google.cloud.retail.v2.CatalogAttribute]
     * to add.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.CatalogAttribute catalog_attribute = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $catalog_attribute = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $attributes_config
     *           Required. Full AttributesConfig resource name. Format:
     *           `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/attributesConfig`
     *     @type \Google\Cloud\Retail\V2\CatalogAttribute $catalog_attribute
     *           Required. The [CatalogAttribute][google.cloud.retail.v2.CatalogAttribute]
     *           to add.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\CatalogService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full AttributesConfig resource name. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/attributesConfig`
     *
     * Generated from protobuf field <code>string attributes_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAttributesConfig()
    {
        return $this->attributes_config;
    }

    /**
     * Required. Full AttributesConfig resource name. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/attributesConfig`
     *
     * Generated from protobuf field <code>string attributes_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAttributesConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->attributes_config = $var;

        return $this;
    }

    /**
     * Required. The [CatalogAttribute][google.cloud.retail.v2.CatalogAttribute]
     * to add.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.CatalogAttribute catalog_attribute = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\CatalogAttribute|null
     */
    public function getCatalogAttribute()
    {
        return $this->catalog_attribute;
    }

    public function hasCatalogAttribute()
    {
        return isset($this->catalog_attribute);
    }

    public function clearCatalogAttribute()
    {
        unset($this->catalog_attribute);
    }

    /**
     * Required. The [CatalogAttribute][google.cloud.retail.v2.CatalogAttribute]
     * to add.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.CatalogAttribute catalog_attribute = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\CatalogAttribute $var
     * @return $this
     */
    public function setCatalogAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\CatalogAttribute::class);
        $this->catalog_attribute = $var;

        return $this;
    }

}

