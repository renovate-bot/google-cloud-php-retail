<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Removes an attribute/facet in the request if is present.
 * * Rule Condition:
 *   Must specify non-empty
 *   [Condition.query_terms][google.cloud.retail.v2.Condition.query_terms]
 *   (for search only) or
 *   [Condition.page_categories][google.cloud.retail.v2.Condition.page_categories]
 *   (for browse only), but can't specify both.
 * * Action Input: attribute name
 * * Action Result: Will remove the attribute (as a facet) from the request
 * if it is present.
 * Example: Suppose the query is "shoes", the
 * [Condition.query_terms][google.cloud.retail.v2.Condition.query_terms] is
 * "shoes" and the attribute name "size", then facet key "size" will be
 * removed from the request (if it is present).
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rule.RemoveFacetAction</code>
 */
class RemoveFacetAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The attribute names (i.e. facet keys) to remove from the dynamic facets
     * (if present in the request). There can't be more 3 attribute names.
     * Each attribute name should be a valid attribute name, be non-empty and
     * contain at most 80 characters.
     *
     * Generated from protobuf field <code>repeated string attribute_names = 1;</code>
     */
    private $attribute_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $attribute_names
     *           The attribute names (i.e. facet keys) to remove from the dynamic facets
     *           (if present in the request). There can't be more 3 attribute names.
     *           Each attribute name should be a valid attribute name, be non-empty and
     *           contain at most 80 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The attribute names (i.e. facet keys) to remove from the dynamic facets
     * (if present in the request). There can't be more 3 attribute names.
     * Each attribute name should be a valid attribute name, be non-empty and
     * contain at most 80 characters.
     *
     * Generated from protobuf field <code>repeated string attribute_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeNames()
    {
        return $this->attribute_names;
    }

    /**
     * The attribute names (i.e. facet keys) to remove from the dynamic facets
     * (if present in the request). There can't be more 3 attribute names.
     * Each attribute name should be a valid attribute name, be non-empty and
     * contain at most 80 characters.
     *
     * Generated from protobuf field <code>repeated string attribute_names = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attribute_names = $arr;

        return $this;
    }

}


