<?php

function make($url)
{
    $components = parse_url($url);
    if (isset($components["query"])) {
        parse_str($components["query"], $components["query"]);
    } else {
        $components["query"] = [];
    }
    return $components;
}

function setScheme(&$data, $scheme)
{
    $data = make(toString($data));
    $data['scheme'] = $scheme;
}

function getScheme($data)
{
    if (isset($data['scheme'])) {
        return $data["scheme"];
    }
    return null;
}

function setHost(&$data, $host)
{
    $data['host'] = $host;

}

function getHost($data)
{
    if (isset($data['host'])) {
        return $data["host"];
    }
    return null;
}

function setPath(&$data, $path)
{
    $data['path'] = $path;
}

function getPath($data)
{
    if (isset($data['path'])) {
        return $data["path"];
    }
    return null;
}

function setQueryParam(&$data, $key, $value)
{
    $data["query"][$key] = $value;
}


function getQueryParam($data, $paramName = null, $default = null)
{
    if (!$paramName) {
        return http_build_query($data["query"]);
    }
    return isset($data["query"][$paramName]) ? $data["query"][$paramName] : $default;
}


function toString($data)
{
    $scheme = isset($data['scheme']) ? getScheme($data) . '://' : '';
    $host = isset($data['host']) ? getHost($data) : '';
    $path = isset($data['path']) ? getPath($data) : '';
    $query = isset($data['query']) && !empty($data['query']) ? '?' . getQueryParam($data) : '';

    return "$scheme$host$path$query";
}

$url = make('https://ht.io/community?q=low');
print('https://ht.io/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";
print('https' === getScheme($url)) ? "true" : "false";
print "<br>";
print('ht.io' === getHost($url)) ? "true" : "false";
print "<br>";
print('/community' === getPath($url)) ? "true" : "false";
print "<br>";

setScheme($url, 'http');
print('http://ht.io/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setHost($url, 'code-basics.com');
print('http://code-basics.com/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setScheme($url, 'https');
setHost($url, 'ht.io');
setPath($url, '/404');
print('https://ht.io/404?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'page', 5);

print('https://ht.io/404?q=low&page=5' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', 'high');
print('https://ht.io/404?q=high&page=5' === toString($url)) ? "true" : "false";
print "<br>";

print('high' === getQueryParam($url, 'q')) ? "true" : "false";
print "<br>";
print('guest' === getQueryParam($url, 'user', 'guest')) ? "true" : "false";
print "<br>";
print is_null(getQueryParam($url, 'b')) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', null);
print('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', null);
print('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
print "<br>";

$url = make('https://ht.io/community');

print('https://ht.io/community' === toString($url)) ? "true" : "false";
print "<br>";

$url = make('https://ht.io/?q=high&page=5');
print('https://ht.io/?q=high&page=5' === toString($url)) ? "true" : "false";
print "<br>";