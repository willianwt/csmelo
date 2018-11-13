<?php

function make_hash($str){
    return sha1(md5($str));
}