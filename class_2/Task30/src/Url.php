<?php
namespace App;

class Url
{
    private string $url;
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function make($url)
    {
        $components = parse_url($url);
        if (isset($components["query"])) {
            parse_str($components["query"], $components["query"]);
        } else {
            $components["query"] = [];
        }
        return $components;
    }
    public function getScheme()
    {
        $temp = self::make($this->url);
        if (isset($temp['scheme'])) {
            return $temp["scheme"];
        }
        return null;
    }

    function getHostName()
    {
        $temp = self::make($this->url);
        if (isset($temp['host'])) {
            return $temp["host"];
        }
        return null;
    }

}


// function setScheme(&$data, $scheme)
// {
//     $data = make(toString($data));
//     $data['scheme'] = $scheme;
// }

// function getScheme($data)
// {
//     if (isset($data['scheme'])) {
//         return $data["scheme"];
//     }
//     return null;
// }

// function setHost(&$data, $host)
// {
//     $data['host'] = $host;

// }

// function getHost($data)
// {
//     if (isset($data['host'])) {
//         return $data["host"];
//     }
//     return null;
// }

// function setPath(&$data, $path)
// {
//     $data['path'] = $path;
// }

// function getPath($data)
// {
//     if (isset($data['path'])) {
//         return $data["path"];
//     }
//     return null;
// }

// function setQueryParam(&$data, $key, $value)
// {
//     $data["query"][$key] = $value;
// }


// function getQueryParam($data, $paramName = null, $default = null)
// {
//     if (!$paramName) {
//         return http_build_query($data["query"]);
//     }
//     return isset($data["query"][$paramName]) ? $data["query"][$paramName] : $default;
// }


// function toString($data)
// {
//     $scheme = isset($data['scheme']) ? getScheme($data) . '://' : '';
//     $host = isset($data['host']) ? getHost($data) : '';
//     $path = isset($data['path']) ? getPath($data) : '';
//     $query = isset($data['query']) && !empty($data['query']) ? '?' . getQueryParam($data) : '';

//     return "$scheme$host$path$query";
// }