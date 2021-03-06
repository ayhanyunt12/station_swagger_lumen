<?php

/**
 * Station API
 * This is a simple API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: ayhanyunt@gmail.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class DevelopersApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation createStation
     *
     * create a new station.
     *
     *
     * @return Http response
     */
    public function createStation()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createStation');
        }
        $body = $input['body'];


        return response('How about implementing createStation as a POST method ?');
    }
    /**
     * Operation updateStation
     *
     * update existing station.
     *
     *
     * @return Http response
     */
    public function updateStation()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateStation');
        }
        $body = $input['body'];


        return response('How about implementing updateStation as a PUT method ?');
    }
    /**
     * Operation stationIdDelete
     *
     * Delete a user by public_id.
     *
     * @param string $id Alphanumeric ID of the station to delete (required)
     *
     * @return Http response
     */
    public function stationIdDelete($id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing stationIdDelete as a DELETE method ?');
    }
    /**
     * Operation stationIdGet
     *
     * Get a user by ID.
     *
     * @param string $id Numeric ID of the station to get (required)
     *
     * @return Http response
     */
    public function stationIdGet($id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing stationIdGet as a GET method ?');
    }
    /**
     * Operation getStations
     *
     * get all station information.
     *
     *
     * @return Http response
     */
    public function getStations()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getStations as a GET method ?');
    }
}
