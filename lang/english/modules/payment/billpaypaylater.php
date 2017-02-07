<?php
require_once('billpay.php');

/* Default Messages */
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_MESSAGE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INFO', MODULE_PAYMENT_BILLPAY_TEXT_INFO);

define('MODULE_PAYMENT_BILLPAYPAYLATER_ALLOWED_TITLE' , MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_ALLOWED_DESC' , MODULE_PAYMENT_BILLPAY_ALLOWED_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_TITLE' , MODULE_PAYMENT_BILLPAY_LOGGING_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_DESC' , MODULE_PAYMENT_BILLPAY_LOGGING_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_MERCHANT_ID_TITLE' , MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_MERCHANT_ID_DESC' , MODULE_PAYMENT_BILLPAY_DATA_PROVIDED_BY_BILLPAY);

define('MODULE_PAYMENT_BILLPAYPAYLATER_ORDER_STATUS_TITLE' , MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_ORDER_STATUS_DESC' , MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_PORTAL_ID_TITLE' , MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_PORTAL_ID_DESC' , MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_SECURE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_SECURE_DESC' , MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_SORT_ORDER_TITLE' , MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_SORT_ORDER_DESC' , MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_STATUS_TITLE' , MODULE_PAYMENT_BILLPAY_STATUS_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_STATUS_DESC' , MODULE_PAYMENT_BILLPAY_STATUS_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTMODE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTMODE_DESC' , MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_ZONE_TITLE' , MODULE_PAYMENT_BILLPAY_ZONE_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_ZONE_DESC' , MODULE_PAYMENT_BILLPAY_ZONE_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_API_URL_BASE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_API_URL_BASE_DESC' , MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTAPI_URL_BASE_TITLE' , MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTAPI_URL_BASE_DESC' , MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_ENABLE_TITLE' , MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_ENABLE_DESC' , MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_MIN_AMOUNT_TITLE', MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_MIN_AMOUNT_DESC', MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGPATH_TITLE', MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGPATH_DESC', MODULE_PAYMENT_BILLPAY_LOGPATH_DESC);

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE);
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BIRTHDATE', MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK', MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK_DE', MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_CH);


define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK_SEPA',    MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK_SEPA_AT', MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA_AT);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_SEPA_INFORMATION',    MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_SEPA_INFORMATION_AT', MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION_AT);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ENTER_BIRTHDATE', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ENTER_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ENTER_BIRTHDATE_AND_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_NOTE', MODULE_PAYMENT_BILLPAY_TEXT_NOTE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_REQ', MODULE_PAYMENT_BILLPAY_TEXT_REQ);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_GENDER);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MALE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_FEMALE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAYPAYLATER_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);


define('JS_BILLPAYPAYLATER_EULA', JS_BILLPAY_EULA);
define('JS_BILLPAYPAYLATER_DOBDAY', JS_BILLPAY_DOBDAY);
define('JS_BILLPAYPAYLATER_DOBMONTH', JS_BILLPAY_DOBMONTH);
define('JS_BILLPAYPAYLATER_DOBYEAR', JS_BILLPAY_DOBYEAR);
define('JS_BILLPAYPAYLATER_GENDER', JS_BILLPAY_GENDER);

define('JS_BILLPAYPAYLATER_CODE', JS_BILLPAY_CODE);
define('JS_BILLPAYPAYLATER_NUMBER', JS_BILLPAY_NUMBER);
define('JS_BILLPAYPAYLATER_NAME', JS_BILLPAY_NAME);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_EULA', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_DOB' , MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_DEFAULT', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_SHORT', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_CREATED_COMMENT', MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CANCEL_COMMENT', MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_DUEDATE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE);


define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_CODE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_NUMBER', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_NAME', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CREATE_INVOICE', MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CANCEL_ORDER', MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ACCOUNT_HOLDER', MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_IBAN', MODULE_PAYMENT_BILLPAY_TEXT_IBAN);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BANK_NAME', MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BIC', MODULE_PAYMENT_BILLPAY_TEXT_BIC);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_REFERENCE', MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BANKDATA', MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA);

define('MODULE_PAYMENT_BILLPAYPAYLATER_DUEDATE_TITLE', MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_PURPOSE', MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ADD', MODULE_PAYMENT_BILLPAY_TEXT_ADD);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEE', MODULE_PAYMENT_BILLPAY_TEXT_FEE);

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_SANDBOX', MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX);
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CHECK', MODULE_PAYMENT_BILLPAY_TEXT_CHECK);
define('MODULE_PAYMENT_BILLPAYPAYLATER_UNLOCK_INFO', MODULE_PAYMENT_BILLPAY_UNLOCK_INFO);

define('MODULE_PAYMENT_BILLPAYPAYLATER_UTF8_ENCODE_TITLE', MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_TITLE);
define('MODULE_PAYMENT_BILLPAYPAYLATER_UTF8_ENCODE_DESC', MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_DESC);

define('MODULE_PAYMENT_BILLPAYPAYLATER_ACTIVATE_ORDER', MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER);
define('MODULE_PAYMENT_BILLPAYPAYLATER_ACTIVATE_ORDER_WARNING', MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING);


define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_INFO1', 'Thank you for choosing to pay with PayLater. The amounts due will be charged to the account specified during the order. In addition to this invoice Billpay will provide you shortly with a payment plan with detailed information on your instalments.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_INFO2', 'Order was issued by ');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_INFO3', '');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEE_INFO1', 'PayLater fee for this order is ');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEE_INFO2', '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_PROMO', 'Click on the radio button to show more.');

// OT
define('MODULE_PAYMENT_BILLPAY_OT_PAYLATER_FEE', 'Service fee');
define('MODULE_PAYMENT_BILLPAY_OT_PAYLATER_TOTAL',               'Total + PayLater fee');

define('MODULE_PAYMENT_BILLPAYPAYLATER_VISUAL_MODE_TITLE' , 'Visual Mode');
define('MODULE_PAYMENT_BILLPAYPAYLATER_VISUAL_MODE_DESC' , '');

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAYPAYLATER_THANK_YOU_TEXT', 'Thank you for choosing BillPay PayLater Instalment when making your purchase.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_PAY_UNTIL_TEXT', 'The amounts due will be debited monthly from the following account:');
define('MODULE_PAYMENT_BILLPAYPAYLATER_EMAIL_TEXT', 'In addition to the invoice you will shortly receive an instalment plan with detailed information on your payments.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_TITLE', 'PayLater | Instalment');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_DESCRIPTION', 'PayLater | Instalment');

