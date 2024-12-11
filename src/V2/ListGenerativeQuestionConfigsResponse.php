<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/generative_question_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for ListQuestions method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.ListGenerativeQuestionConfigsResponse</code>
 */
class ListGenerativeQuestionConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All the questions for a given catalog.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.GenerativeQuestionConfig generative_question_configs = 1;</code>
     */
    private $generative_question_configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Retail\V2\GenerativeQuestionConfig>|\Google\Protobuf\Internal\RepeatedField $generative_question_configs
     *           All the questions for a given catalog.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\GenerativeQuestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * All the questions for a given catalog.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.GenerativeQuestionConfig generative_question_configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGenerativeQuestionConfigs()
    {
        return $this->generative_question_configs;
    }

    /**
     * All the questions for a given catalog.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.GenerativeQuestionConfig generative_question_configs = 1;</code>
     * @param array<\Google\Cloud\Retail\V2\GenerativeQuestionConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGenerativeQuestionConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\GenerativeQuestionConfig::class);
        $this->generative_question_configs = $arr;

        return $this;
    }

}
