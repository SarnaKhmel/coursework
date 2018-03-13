<?php
return array (
  'botman/driver-config' => 
  array (
    0 => 'stubs/slack.php',
    1 => 'stubs/telegram.php',
    2 => 'stubs/web.php',
  ),
  'botman/driver' => 
  array (
    0 => 'BotMan\\Drivers\\Slack\\SlackDriver',
    1 => 'BotMan\\Drivers\\Telegram\\TelegramDriver',
    2 => 'BotMan\\Drivers\\Telegram\\TelegramAudioDriver',
    3 => 'BotMan\\Drivers\\Telegram\\TelegramFileDriver',
    4 => 'BotMan\\Drivers\\Telegram\\TelegramLocationDriver',
    5 => 'BotMan\\Drivers\\Telegram\\TelegramPhotoDriver',
    6 => 'BotMan\\Drivers\\Telegram\\TelegramVideoDriver',
    7 => 'BotMan\\Drivers\\Web\\WebDriver',
  ),
  'botman/commands' => 
  array (
    0 => 'BotMan\\Drivers\\Slack\\Commands\\SlackRTMListenCommand',
    1 => 'BotMan\\Drivers\\Telegram\\Console\\Commands\\TelegramRegisterCommand',
  ),
);
