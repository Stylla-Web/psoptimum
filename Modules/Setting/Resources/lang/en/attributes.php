<?php

return [
    'supported_countries' => 'Supported Countries',
    'default_country' => 'Default Country',
    'supported_locales' => 'Supported Locales',
    'default_locale' => 'Default Locale',
    'default_timezone' => 'Default Timezone',
    'customer_role' => 'Customer Role',
    'reviews_enabled' => 'Reviews & Ratings',
    'auto_approve_reviews' => 'Auto Approve Reviews',
    'cookie_bar_enabled' => 'Cookie Bar',

    'maintenance_mode' => 'Maintenance Mode',

    'translatable.store_tagline' => 'Store Tagline',
    'translatable.store_name' => 'Store Name',
    'store_phone' => 'Store Phone',
    'store_fax' => 'Store Fax',
    'store_email' => 'Store Email',
    'store_address_1' => 'Store Address 1',
    'store_address_2' => 'Store Address 2',
    'store_city' => 'Store City',
    'store_country' => 'Store Country',
    'store_state' => 'Store State',
    'store_zip' => 'Store Zip',
    'store_phone_hide' => 'Hide Store Phone and Fax',
    'store_email_hide' => 'Hide Store Email',

    'supported_currencies' => 'Supported Currencies',
    'default_currency' => 'Default Currency',
    'currency_rate_exchange_service' => 'Exchange Rate Service',
    'fixer_access_key' => 'Fixer Access key',
    'forge_api_key' => 'Forge API key',
    'currency_data_feed_api_key' => 'Currency Data Feed API Key',
    'auto_refresh_currency_rates' => 'Auto Refresh',
    'auto_refresh_currency_rate_frequency' => 'Frequency',

    'sms_from' => 'SMS From',
    'sms_service' => 'SMS Service',
    'vonage_key' => 'API Key',
    'vonage_secret' => 'API Secret',
    'twilio_sid' => 'Account SID',
    'twilio_token' => 'Auth Token',
    'welcome_sms' => 'Welcome SMS',
    'new_order_admin_sms' => 'New Order Admin SMS',
    'new_order_sms' => 'New Order SMS',
    'sms_order_statuses' => 'SMS Order Statuses',

    'mail_from_address' => 'Mail From Address',
    'mail_from_name' => 'Mail From Name',
    'mail_host' => 'Mail Host',
    'mail_port' => 'Mail Port',
    'mail_username' => 'Mail Username',
    'mail_password' => 'Mail Password',
    'mail_encryption' => 'Mail Encryption',
    'welcome_email' => 'Welcome Email',
    'enable_disable' => 'Enable/Disable',
    'recipient' => 'Recipient',
    'invoice_email' => 'Invoice Email',
    'email_order_statuses' => 'Email Order Statuses',

    'newsletter_enabled' => 'Newsletter',
    'newsletter_last_name_enabled' => 'Name and Last name',
    'mailchimp_api_key' => 'Mailchimp API Key',
    'mailchimp_list_id' => 'Mailchimp List ID',

    'custom_header_assets' => 'Header',
    'custom_footer_assets' => 'Footer',

    'facebook_login_enabled' => 'Status',
    'facebook_login_app_id' => 'App ID',
    'facebook_login_app_secret' => 'App Secret',

    'google_login_enabled' => 'Status',
    'google_login_client_id' => 'Client ID',
    'google_login_client_secret' => 'Client Secret',

    'free_shipping_enabled' => 'Status',
    'translatable.free_shipping_label' => 'Label',
    'free_shipping_min_amount' => 'Minimum Amount',

    'free_shipping_radius_enabled' => 'Status',
    'free_shipping_radius' => 'Radius',

    'commercial_shipping_enabled' => 'Status',
    'translatable.commercial_shipping_label' => 'Label',
    'commercial_shipping_cost' => 'Cost',

    'shippo_shipping_enabled' => 'Status',
    'translatable.shippo_shipping_label' => 'Shippo is the best multi-carrier shipping software for e-commerce businesses.',
    'shippo_shipping_api_key' => 'Api Key',
    'shippo_profit_margin' => 'Profit Marge',
    'shippo_profit_margin_type' => 'Profit Marge Type',
    'shippo_profit_margin_types' => [
        '0' => 'Fixed',
        '1' => 'Percent',
    ],

    'local_pickup_enabled' => 'Status',
    'translatable.local_pickup_label' => 'Label',
    'local_pickup_cost' => 'Cost',

    'flat_rate_enabled' => 'Status',
    'translatable.flat_rate_label' => 'Label',
    'flat_rate_cost' => 'Cost',

    'paypal_enabled' => 'Status',
    'translatable.paypal_label' => 'Label',
    'translatable.paypal_description' => 'Description',
    'paypal_test_mode' => 'Sandbox',
    'paypal_client_id' => 'Client ID',
    'paypal_secret' => 'Secret',

    'stripe_enabled' => 'Status',
    'translatable.stripe_label' => 'Label',
    'translatable.stripe_description' => 'Description',
    'stripe_publishable_key' => 'Publishable Key',
    'stripe_secret_key' => 'Secret Key',

    'paytm_enabled' => 'Status',
    'translatable.paytm_label' => 'Label',
    'translatable.paytm_description' => 'Description',
    'paytm_test_mode' => 'Sandbox',
    'paytm_merchant_id' => 'Merchant ID',
    'paytm_merchant_key' => 'Merchant Key',

    'razorpay_enabled' => 'Status',
    'razorpay_label' => 'Label',
    'razorpay_description' => 'Description',
    'razorpay_key_id' => 'Key Id',
    'razorpay_key_secret' => 'Key Secret',

    'instamojo_enabled' => 'Status',
    'instamojo_label' => 'Label',
    'instamojo_description' => 'Description',
    'instamojo_test_mode' => 'Sandbox',
    'instamojo_api_key' => 'API Key',
    'instamojo_auth_token' => 'Auth Token',

    'cod_enabled' => 'Status',
    'translatable.cod_label' => 'Label',
    'translatable.cod_description' => 'Description',

    'bank_transfer_enabled' => 'Status',
    'translatable.bank_transfer_label' => 'Label',
    'translatable.bank_transfer_description' => 'Description',
    'translatable.bank_transfer_instructions' => 'Instructions',

    'check_payment_enabled' => 'Status',
    'translatable.check_payment_label' => 'Label',
    'translatable.check_payment_description' => 'Description',
    'translatable.check_payment_instructions' => 'Instructions',

    // validation
    'supported_countries.*' => 'Supported Countries',
    'supported_locales.*' => 'Supported Locales',
    'supported_currencies.*' => 'Supported Currencies',
];
