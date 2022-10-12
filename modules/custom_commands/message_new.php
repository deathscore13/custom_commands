<?php

if ($CFG_CUSTOM_COMMANDS &&
    ($res = $m->param(0)) &&
    $res = Utils::findKey($res, $CFG_CUSTOM_COMMANDS))
{
    if ($res['pm'])
        $vk->replyPM($res['message'] ?? '', -1, $res);
    else
        $vk->send($res['message'] ?? '', $res);
    
    exit();
}