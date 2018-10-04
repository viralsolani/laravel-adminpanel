<?php

return [

    /*
        ------------------------------------------------------------------------------------------------
        |  Credentials
        | ------------------------------------------------------------------------------------------------
     */
        'secret'     => getenv('NOCAPTCHA_SECRET') ?: 'no-captcha-secret',
        'sitekey'    => getenv('NOCAPTCHA_SITEKEY') ?: 'no-captcha-sitekey',

    /*
        ------------------------------------------------------------------------------------------------
        |  Localization
        | ------------------------------------------------------------------------------------------------
     */
        'lang'       => app()->getLocale(),

    /*
        ------------------------------------------------------------------------------------------------
        |  Attributes
        | ------------------------------------------------------------------------------------------------
     */
        'attributes' => [
                         'data-theme' => null,
// 'light', 'dark'
                         'data-type'  => null,
// 'image', 'audio'
                         'data-size'  => null,
// 'normal', 'compact'
                        ],
       ];
