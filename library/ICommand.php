<?php
/**
 * Copyright 2010 Cyrille Mahieux
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations
 * under the License.
 *
 * ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°>
 *
 * Interface of communication to MemCache Server
 *
 * @author c.mahieux@of2m.fr
 * @since 20/03/2010
 */
interface MemCacheAdmin_ICommand
{
    /**
     * Constructor
     *
     * @param Array $ini Array from ini_parse
     *
     * @return void
     */
    function __construct($ini);

    /**
     * Send stats command to server
     * Return the result if successful or false otherwise
     *
     * @param String $server Hostname
     * @param Integer $port Hostname Port
     *
     * @return Array|Boolean
     */
    function stats($server, $port);

    /**
     * Retrieve slabs stats
     * Return the result if successful or false otherwise
     *
     * @param String $server Hostname
     * @param Integer $port Hostname Port
     *
     * @return Array|Boolean
     */
    function slabs($server, $port);

    /**
     * Retrieve items from a slabs
     * Return the result if successful or false otherwise
     *
     * @param String $server Hostname
     * @param Integer $port Hostname Port
     * @param Integer $slab Slab ID
     *
     * @return Array|Boolean
     */
    function items($server, $port, $slab);

    /**
     * Send get command to server to retrieve an item
     * Return the result if successful or false otherwise
     *
     * @param String $server Hostname
     * @param Integer $port Hostname Port
     * @param String $key Key to retrieve
     *
     * @return Mixed|Boolean
     */
    function get($server, $port, $key);

    /**
     * Delete an item
     * Return true if successful, false otherwise
     *
     * @param String $server Hostname
     * @param Integer $port Hostname Port
     * @param String $key Key to delete
     *
     * @return Boolean
     */
    function delete($server, $port, $key);
}