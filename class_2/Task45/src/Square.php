<?php

namespace App\Square;

use App\Dispatcher;

function init() {
    Dispatcher\defmethod(__NAMESPACE__, 'getArea', function ($self) {
        return $self['data']['side'] ** 2;
    });
}

function make($side) {
    return ['name' => __NAMESPACE__, 'data' => ['side' => $side]];
}

function getSide($self) {
    return $self['data']['side'];
}