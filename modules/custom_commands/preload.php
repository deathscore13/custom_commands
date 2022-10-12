<?php

const CUSTOM_COMMANDS_V_MAJOR = 1;
const CUSTOM_COMMANDS_V_MINOR = 0;
const CUSTOM_COMMANDS_V_RELEASE = 0;
const CUSTOM_COMMANDS_VERSION = CUSTOM_COMMANDS_V_MAJOR.'.'.CUSTOM_COMMANDS_V_MINOR.'.'.CUSTOM_COMMANDS_V_RELEASE;

$m->lang('custom_commands');

const CUSTOM_COMMANDS_INFO = [
    'name' => 'Custom Commands',
    'description' => LANG_CUSTOM_COMMANDS[0],
    'version' => CUSTOM_COMMANDS_VERSION,
    'author' => 'DeathScore13',
    'url' => 'https://github.com/deathscore13/custom_commands'
];

if (Config::load('custom_commands') && ($CFG_CUSTOM_COMMANDS = Config::parseByPeerId($vk->obj['peer_id'], $CFG_CUSTOM_COMMANDS)))
{
    foreach ($CFG_CUSTOM_COMMANDS as $cmd => $params)
        $m->regCmd(explode(',', $cmd), $params['description'] ?? '');
}