<?php
/**
 * ==================================================================================================
 * HTTP request Class
 * Created by Ali Masood (ali@zenex.co).
 * Project: Hiro Php Framework
 * Date: 2016/03/07
 * ==================================================================================================
 * This file is a part of Hiro PHP Framework, a simple framework to get the job done by combining
 * the best practices of DDD, TDD and BDD.
 *
 * (c) Ali Masood <ali@zenex.co>
 *
 * This file as a part and the Hiro Framework as a whole consists of voluntary contributions made
 * by many individuals and is licensed under the MIT license.
 * For the full copyright and license information, please view the LICENSE file that was distributed
 * with this source code.
 *
 * For more information on the Hiro framework, licensing, documentation, usage guides and discussions
 * please visit our official homepage at htpp://hiro.zenex.co
 *
 * For bug reports, contribution and latest release info, please use github https://github.com/zenexia/hiro
 */

namespace zen\http;

/**
 * request class provides a unified interface to handle HTTP request calls and thereby managing the requests
 * parameters, files, uploads etc.
 *
 */
class Request implements RequestInterface
{

    protected $uri;
    protected $params;

    public function __construct(string $uri, bool $initiate = true) {
        $this->uri = $uri;
        if($initiate){
            $this->init();
        }
    }

    private function init(){
        // set GET data params
        if(!empty($_GET)){
            foreach($_GET as $key=>$val) {
                $this->setParam($key, $val);
            }
        }


        // set POST data params
        if(!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $this->setParam($key, $val);
            }
        }
    }

    /**
     * To get a request parameter from the current HTTP request.
     *
     * If $key is empty, an exception will be thrown
     *
     * @param string $key
     */
    public function getParam($key) {
        if (!isset($this->params[$key])) {
            throw new \InvalidArgumentException("The request parameter with key '$key' is invalid.");
        }
        return $this->params[$key];
    }


    /**
     * To get multiple request parameters from the current HTTP request.
     *
     * If $keys is empty, an array of all the parameters will be returned
     *
     * @param array $keys
     * @return mixed
     */
    public function getParams(array $keys) {
        return $this->params;
    }

    /**
     * To get a parameters from POST request only.
     *
     * Full POST array will be returned if $keys is empty
     *
     * @param array $keys
     * @return mixed
     */
    public function getPost(array $keys){}

    /**
     * To get parameters from PUT request
     *
     * Full PUT array will be returned if $keys is empty
     *
     * @param array $keys
     * @return mixed
     */
    public function getPut(array $keys){}

    /**
     * To get parameters from GET request
     *
     * Full GET array will be returned if $keys is empty
     *
     * @param array $keys
     * @return mixed
     */
    public function getQuery(array $keys){}


    /**
     * To get parameters from request SERVER
     *
     * Full SERVER array will be returned if $keys is empty
     *
     * @param array $keys
     * @return mixed
     */
    public function getServer(array $keys){}

    /**
     * To check if given parameter is present in the request
     *
     * Will throw an exception if $key is empty
     *
     * @param string $key
     * @return boolean
     */
    public function has($key){}

    /**
     * To check if all of the parameters are present in the request
     *
     * It is an AND check and will return false if any is missing.
     *
     * @param array $keys
     * @return boolean
     */
    public function hasAll(array $keys){}

    /**
     * To check if any of the parameters are present in the request
     *
     * It is an OR check and will return true if any one is present.
     *
     * @param array $keys
     * @return boolean
     */
    public function hasAny(array $keys){}

    /**
     * To Check if POST has a certain parameter
     *
     * Will throw an exception if the $key is empty
     *
     * @param string $key
     * @return boolean
     */
    public function postHas($key){}

    /**
     * To Check if PUT has a certain parameter
     *
     * Will throw an exception if the $key is empty
     *
     * @param string $key
     * @return boolean
     */
    public function putHas($key){}

    /**
     * To Check if GET has a certain parameter
     *
     * Will throw an exception if the $key is empty
     *
     * @param string $key
     * @return boolean
     */
    public function queryHas($key){}

    /**
     * To Check if SERVER has a certain parameter
     *
     * Will throw an exception if the $key is empty
     *
     * @param string $key
     * @return boolean
     */
    public function serverHas($key){}

    /**
     * To Check if HEADER has a certain parameter
     *
     * Will throw an exception if the $key is empty
     *
     * @param string $key
     * @return boolean
     */
    public function headerHas($key){}

    /**
     * To get a request HEADER parameter from the current HTTP request.
     *
     * If the $key is empty, an exception will be thrown
     *
     * @param string $key
     */
    public function getHeader($key){}


    /**
     * To get multiple request HEADER parameters from the current HTTP request.
     *
     * If the $keys is empty, an array of all the HEADERS  will be returned
     *
     * @param array $keys
     * @return mixed
     */
    public function getHeaders(array $keys){}


    /**
     * To get the request protocol (http/https)
     * @return string
     */
    public function getProtocol(){}


    /**
     * To check if its an ajax request
     *
     * @return boolean
     */
    public function isAjax(){}


    /**
     * To check if its a SOAP request
     *
     * @return boolean
     */
    public function isSoap(){}

    /**
     * To check if request is made using SSL
     *
     * @return boolean
     */
    public function isSecure(){}

    /**
     * To check if request is a raw json request
     *
     * @return boolean
     */
    public function isJson(){}

    /**
     * To get decoded JSON if it is present
     */
    public function getJson(){}


    /**
     * To get HTTP URI for current request
     */
    public function getURI(){
        return $this->uri;
    }


    public function setParam($key, $value) {
        $this->params[$key] = $value;
        return $this;
    }

    /**
     * To get HTTP request method
     */
    public function getMethod(){
        return mb_strtoupper($_SERVER['REQUEST_METHOD']);
    }

    /**
     * To check if request is made using GET method
     *
     * @return boolean
     */
    public function isGet(){}

    /**
     * To check if request is made using POST method
     *
     * @return boolean
     */
    public function isPost(){}

    /**
     * To check if request is made using PUT method
     *
     * @return boolean
     */
    public function isPut(){}

    /**
     * To check if request is made using OPTIONS method
     *
     * @return boolean
     */
    public function isOptions(){}

    /**
     * To check if request is made using DELETE method
     *
     * @return boolean
     */
    public function isDelete(){}

    /**
     * To check if request is made using PATCH method
     *
     * @return boolean
     */
    public function isPatch(){}

    /**
     * To check if request is made using HEAD method
     *
     * @return boolean
     */
    public function isHead(){}



    /**
     * To check if any files are attached with the request
     *
     * @return boolean
     */
    public function hasFiles(){}

    /**
     * Alias of hasFiles, to check if any files are attached with the request
     *
     * @return boolean
     */
    public function hasUploadedFiles(){}


    /**
     * To get uploaded files
     */
    public function getFiles(){}


    /**
     * To check if referer is set
     *
     * @return boolean
     */
    public function hasReferer(){}

    /**
     * To get the page referer
     */
    public function getReferer(){}


    /**
     * To get the request content type
     */
    public function getContentType(){}

    /**
     * To get client acceptable/requested content type
     */
    public function getClientAcceptableContentTypes(){}


    /**
     * To get client charsets array
     */
    public function getClientCharsets(){}


    /**
     * To get client languages array
     */
    public function getClientLanguages(){}

}