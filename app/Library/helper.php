<?php
/*  User: tao    Date: 2018/8/29   Time: 16:21  */
//全局函数
/**
 * @param $str  //要截取的字符串
 * @param $len  //要截取的长度
 * @param $tail //截取后结尾替换的字符
 * @return null|string  返回截取后的字符窜
 */
function changeStr($str,$len,$tail) {
    if ( mb_strlen($str)>$len ) {
        $tmp = mb_substr($str,0,$len,'utf8');
        return $tmp.$tail;
    } else {
        return $str;
    }
}