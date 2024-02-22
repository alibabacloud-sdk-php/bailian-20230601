<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class DeleteDocResponseBody extends Model
{
    /**
     * @example 8C8FxxxxC3EE
     *
     * @var string
     */
    public $docId;

    /**
     * @description Id of the request
     *
     * @example 17204B98-xxxx-4F9A-8464-2446A84821CA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'docId'     => 'DocId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
