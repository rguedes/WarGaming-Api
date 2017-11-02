<?php

/**
 * This file is part of the WarGaming API package
 *
 * (c) Vitaliy Zhuk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace WarGaming\Api\Method\WoT\Encyclopedia;

use Guzzle\Http\Message\Response as GuzzleResponse;
use WarGaming\Api\Method\AbstractProcessor;
use WarGaming\Api\Method\MethodInterface;
use WarGaming\Api\Model\WoT\Tank\Tank;

/**
 * Tank info API processor
 *
 * @author Vitaliy Zhuk <zhuk2205@gmail.com>
 */
class TanksProcessor extends AbstractProcessor
{
    /**
     * Get API Uri
     *
     * @return string
     */
    protected function getApiUri()
    {
        return 'wot/encyclopedia/tanks';
        //https://api.worldoftanks.ru/wot/encyclopedia/tanks/?application_id=cba9bfbfc93ed03d2ee25efe54a6aec6
    }

    /**
     * {@inheritDoc}
     */
    public function parseResponse(array $data, array $fullData, GuzzleResponse $response, MethodInterface $method)
    {
        sort($data);
        return $data;
    }
}
