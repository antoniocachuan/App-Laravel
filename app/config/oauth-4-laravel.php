<?php
return array( 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session', 

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id'     => '1420404098099335',
            'client_secret' => '704e5cbe98e25b8a23938f38f7e0dcb9',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),

        'Twitter' => array(
			    'client_id'     => 'De1Ldq8qByUMEkZsyzU9EHNnG',
			    'client_secret' => 't14g5zDsOOrAiKE702h12uOeXtCn4DX9fouxsfkRkXVDsOUnMN',
			    'scope' => array(),  
				),      

        'Google' => array(
			    'client_id'     => '388718272178-5eff0b1shfaoaeacluj5becboln26qhu.apps.googleusercontent.com',
			    'client_secret' => 'snNEkdW3V0-gh6GxM-pRaA5S',
			    'scope'         => array('userinfo_email', 'userinfo_profile'),
				),  

    )

);