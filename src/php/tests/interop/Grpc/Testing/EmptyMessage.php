<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/empty.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An empty message that you can re-use to avoid defining duplicated empty
 * messages in your project. A typical example is to use it as argument or the
 * return value of a service API. For instance:
 *   service Foo {
 *     rpc Bar (grpc.testing.Empty) returns (grpc.testing.Empty) { };
 *   };
 *
 * Generated from protobuf message <code>grpc.testing.EmptyMessage</code>
 */
class EmptyMessage extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Proto\Grpc\Testing\PBEmpty::initOnce();
        parent::__construct($data);
    }

}

