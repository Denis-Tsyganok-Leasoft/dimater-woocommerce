<?php
if (!defined('ABSPATH')) {
    exit;
}

class WC_Ginger_BankConfig
{

    /**
     * GINGER_ENDPOINT used for create Ginger client
     */
    const GINGER_BANK_ENDPOINT = 'https://api.paygate.dipaygo.cloud';

    /**
     * BANK_PREFIX and BANK_LABEL used to provide GPE solution
     */
    const BANK_PREFIX = "dimater";
    const BANK_LABEL = "Dimater Payments";
    const PLUGIN_NAME = "dimater-payments-woocommerce";

    /**
     * Dimater supported payment methods
     */
    public static $BANK_PAYMENT_METHODS = [
        'dimater_credit-card',
        'dimater_paypal',
        'dimater_sofort',
    ];

    /**
     * EMS Online payment methods classnames
     */
    public static $WC_BANK_PAYMENT_METHODS = [
        'WC_Ginger_Callback',
        'WC_Ginger_Creditcard',
        'WC_Ginger_PayPal',
        'WC_Ginger_Sofort',
    ];
}