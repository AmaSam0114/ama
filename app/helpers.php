<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function routeParent($string){
    $routename = request()->route()->getName();
    return explode('.', $routename)[0] === $string ;
}
function routeChild($string){
     return request()->route()->getName() === $string ;
}