<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e3f4436005bc6ae82b08cd53eeead65
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YandexCheckout\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YandexCheckout\\' => 
        array (
            0 => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib',
        ),
    );

    public static $classMap = array (
        'YandexCheckout\\Client' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Client.php',
        'YandexCheckout\\Client\\ApiClientInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Client/ApiClientInterface.php',
        'YandexCheckout\\Client\\BaseClient' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Client/BaseClient.php',
        'YandexCheckout\\Client\\CurlClient' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Client/CurlClient.php',
        'YandexCheckout\\Client\\UserAgent' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Client/UserAgent.php',
        'YandexCheckout\\Client\\YandexMoneyApi' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Client/YandexMoneyApi.php',
        'YandexCheckout\\Common\\AbstractEnum' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/AbstractEnum.php',
        'YandexCheckout\\Common\\AbstractObject' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/AbstractObject.php',
        'YandexCheckout\\Common\\AbstractPaymentRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/AbstractPaymentRequest.php',
        'YandexCheckout\\Common\\AbstractPaymentRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/AbstractPaymentRequestBuilder.php',
        'YandexCheckout\\Common\\AbstractRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/AbstractRequest.php',
        'YandexCheckout\\Common\\AbstractRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/AbstractRequestBuilder.php',
        'YandexCheckout\\Common\\Exceptions\\ApiConnectionException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/ApiConnectionException.php',
        'YandexCheckout\\Common\\Exceptions\\ApiException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/ApiException.php',
        'YandexCheckout\\Common\\Exceptions\\AuthorizeException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/AuthorizeException.php',
        'YandexCheckout\\Common\\Exceptions\\BadApiRequestException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/BadApiRequestException.php',
        'YandexCheckout\\Common\\Exceptions\\EmptyPropertyValueException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/EmptyPropertyValueException.php',
        'YandexCheckout\\Common\\Exceptions\\ExtensionNotFoundException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/ExtensionNotFoundException.php',
        'YandexCheckout\\Common\\Exceptions\\ForbiddenException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/ForbiddenException.php',
        'YandexCheckout\\Common\\Exceptions\\InternalServerError' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/InternalServerError.php',
        'YandexCheckout\\Common\\Exceptions\\InvalidPropertyException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/InvalidPropertyException.php',
        'YandexCheckout\\Common\\Exceptions\\InvalidPropertyValueException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/InvalidPropertyValueException.php',
        'YandexCheckout\\Common\\Exceptions\\InvalidPropertyValueTypeException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/InvalidPropertyValueTypeException.php',
        'YandexCheckout\\Common\\Exceptions\\InvalidRequestException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/InvalidRequestException.php',
        'YandexCheckout\\Common\\Exceptions\\JsonException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/JsonException.php',
        'YandexCheckout\\Common\\Exceptions\\NotFoundException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/NotFoundException.php',
        'YandexCheckout\\Common\\Exceptions\\ResponseProcessingException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/ResponseProcessingException.php',
        'YandexCheckout\\Common\\Exceptions\\TooManyRequestsException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/TooManyRequestsException.php',
        'YandexCheckout\\Common\\Exceptions\\UnauthorizedException' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/Exceptions/UnauthorizedException.php',
        'YandexCheckout\\Common\\HttpVerb' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/HttpVerb.php',
        'YandexCheckout\\Common\\LoggerWrapper' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/LoggerWrapper.php',
        'YandexCheckout\\Common\\ResponseObject' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Common/ResponseObject.php',
        'YandexCheckout\\Helpers\\Config\\ConfigurationLoader' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Helpers/Config/ConfigurationLoader.php',
        'YandexCheckout\\Helpers\\Config\\ConfigurationLoaderInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Helpers/Config/ConfigurationLoaderInterface.php',
        'YandexCheckout\\Helpers\\Random' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Helpers/Random.php',
        'YandexCheckout\\Helpers\\RawHeadersParser' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Helpers/RawHeadersParser.php',
        'YandexCheckout\\Helpers\\StringObject' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Helpers/StringObject.php',
        'YandexCheckout\\Helpers\\TypeCast' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Helpers/TypeCast.php',
        'YandexCheckout\\Helpers\\UUID' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Helpers/UUID.php',
        'YandexCheckout\\Model\\Airline' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Airline.php',
        'YandexCheckout\\Model\\AirlineInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/AirlineInterface.php',
        'YandexCheckout\\Model\\AmountInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/AmountInterface.php',
        'YandexCheckout\\Model\\AuthorizationDetails' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/AuthorizationDetails.php',
        'YandexCheckout\\Model\\AuthorizationDetailsInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/AuthorizationDetailsInterface.php',
        'YandexCheckout\\Model\\CancellationDetails' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/CancellationDetails.php',
        'YandexCheckout\\Model\\CancellationDetailsInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/CancellationDetailsInterface.php',
        'YandexCheckout\\Model\\CancellationDetailsPartyCode' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/CancellationDetailsPartyCode.php',
        'YandexCheckout\\Model\\CancellationDetailsReasonCode' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/CancellationDetailsReasonCode.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\AbstractConfirmationAttributes' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/AbstractConfirmationAttributes.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\ConfirmationAttributesCodeVerification' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesCodeVerification.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\ConfirmationAttributesDeepLink' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesDeepLink.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\ConfirmationAttributesEmbedded' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesEmbedded.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\ConfirmationAttributesExternal' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesExternal.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\ConfirmationAttributesFactory' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesFactory.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\ConfirmationAttributesQr' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesQr.php',
        'YandexCheckout\\Model\\ConfirmationAttributes\\ConfirmationAttributesRedirect' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesRedirect.php',
        'YandexCheckout\\Model\\ConfirmationType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ConfirmationType.php',
        'YandexCheckout\\Model\\Confirmation\\AbstractConfirmation' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/AbstractConfirmation.php',
        'YandexCheckout\\Model\\Confirmation\\ConfirmationCodeVerification' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/ConfirmationCodeVerification.php',
        'YandexCheckout\\Model\\Confirmation\\ConfirmationDeepLink' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/ConfirmationDeepLink.php',
        'YandexCheckout\\Model\\Confirmation\\ConfirmationEmbedded' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/ConfirmationEmbedded.php',
        'YandexCheckout\\Model\\Confirmation\\ConfirmationExternal' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/ConfirmationExternal.php',
        'YandexCheckout\\Model\\Confirmation\\ConfirmationFactory' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/ConfirmationFactory.php',
        'YandexCheckout\\Model\\Confirmation\\ConfirmationQr' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/ConfirmationQr.php',
        'YandexCheckout\\Model\\Confirmation\\ConfirmationRedirect' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Confirmation/ConfirmationRedirect.php',
        'YandexCheckout\\Model\\CurrencyCode' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/CurrencyCode.php',
        'YandexCheckout\\Model\\Leg' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Leg.php',
        'YandexCheckout\\Model\\LegInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/LegInterface.php',
        'YandexCheckout\\Model\\Metadata' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Metadata.php',
        'YandexCheckout\\Model\\MonetaryAmount' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/MonetaryAmount.php',
        'YandexCheckout\\Model\\NotificationEventType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/NotificationEventType.php',
        'YandexCheckout\\Model\\NotificationType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/NotificationType.php',
        'YandexCheckout\\Model\\Notification\\AbstractNotification' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Notification/AbstractNotification.php',
        'YandexCheckout\\Model\\Notification\\NotificationCanceled' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Notification/NotificationCanceled.php',
        'YandexCheckout\\Model\\Notification\\NotificationFactory' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Notification/NotificationFactory.php',
        'YandexCheckout\\Model\\Notification\\NotificationRefundSucceeded' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Notification/NotificationRefundSucceeded.php',
        'YandexCheckout\\Model\\Notification\\NotificationSucceeded' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Notification/NotificationSucceeded.php',
        'YandexCheckout\\Model\\Notification\\NotificationWaitingForCapture' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Notification/NotificationWaitingForCapture.php',
        'YandexCheckout\\Model\\Passenger' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Passenger.php',
        'YandexCheckout\\Model\\PassengerInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PassengerInterface.php',
        'YandexCheckout\\Model\\Payment' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Payment.php',
        'YandexCheckout\\Model\\PaymentData\\AbstractPaymentData' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/AbstractPaymentData.php',
        'YandexCheckout\\Model\\PaymentData\\B2b\\Sberbank\\VatData' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatData.php',
        'YandexCheckout\\Model\\PaymentData\\B2b\\Sberbank\\VatDataInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatDataInterface.php',
        'YandexCheckout\\Model\\PaymentData\\B2b\\Sberbank\\VatDataRate' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatDataRate.php',
        'YandexCheckout\\Model\\PaymentData\\B2b\\Sberbank\\VatDataType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatDataType.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataAlfabank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataAlfabank.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataApplePay' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataApplePay.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataB2bSberbank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataB2bSberbank.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataBankCard' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataBankCard.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataBankCardCard' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataBankCardCard.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataCash' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataCash.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataFactory' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataFactory.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataGooglePay' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataGooglePay.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataInstallments' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataInstallments.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataMobileBalance' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataMobileBalance.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataQiwi' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataQiwi.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataSberbank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataSberbank.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataTinkoffBank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataTinkoffBank.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataWebmoney' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataWebmoney.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataWechat' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataWechat.php',
        'YandexCheckout\\Model\\PaymentData\\PaymentDataYandexWallet' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentData/PaymentDataYandexWallet.php',
        'YandexCheckout\\Model\\PaymentInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentInterface.php',
        'YandexCheckout\\Model\\PaymentMethodType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethodType.php',
        'YandexCheckout\\Model\\PaymentMethod\\AbstractPaymentMethod' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/AbstractPaymentMethod.php',
        'YandexCheckout\\Model\\PaymentMethod\\B2b\\Sberbank\\PayerBankDetails' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/B2b/Sberbank/PayerBankDetails.php',
        'YandexCheckout\\Model\\PaymentMethod\\B2b\\Sberbank\\PayerBankDetailsInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/B2b/Sberbank/PayerBankDetailsInterface.php',
        'YandexCheckout\\Model\\PaymentMethod\\BankCardSource' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/BankCardSource.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodAlfaBank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodAlfaBank.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodApplePay' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodApplePay.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodB2bSberbank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodB2bSberbank.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodBankCard' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodBankCard.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodCardType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodCardType.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodCash' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodCash.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodFactory' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodFactory.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodGooglePay' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodGooglePay.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodInstallments' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodInstallments.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodMobileBalance' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodMobileBalance.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodPsb' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodPsb.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodQiwi' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodQiwi.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodSberbank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodSberbank.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodTinkoffBank' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodTinkoffBank.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodWebmoney' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodWebmoney.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodWechat' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodWechat.php',
        'YandexCheckout\\Model\\PaymentMethod\\PaymentMethodYandexWallet' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentMethod/PaymentMethodYandexWallet.php',
        'YandexCheckout\\Model\\PaymentStatus' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/PaymentStatus.php',
        'YandexCheckout\\Model\\Receipt' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Receipt.php',
        'YandexCheckout\\Model\\ReceiptCustomer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ReceiptCustomer.php',
        'YandexCheckout\\Model\\ReceiptCustomerInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ReceiptCustomerInterface.php',
        'YandexCheckout\\Model\\ReceiptInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ReceiptInterface.php',
        'YandexCheckout\\Model\\ReceiptItem' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ReceiptItem.php',
        'YandexCheckout\\Model\\ReceiptItemInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ReceiptItemInterface.php',
        'YandexCheckout\\Model\\ReceiptRegistrationStatus' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ReceiptRegistrationStatus.php',
        'YandexCheckout\\Model\\ReceiptType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/ReceiptType.php',
        'YandexCheckout\\Model\\Receipt\\AgentType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Receipt/AgentType.php',
        'YandexCheckout\\Model\\Receipt\\PaymentMode' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Receipt/PaymentMode.php',
        'YandexCheckout\\Model\\Receipt\\PaymentSubject' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Receipt/PaymentSubject.php',
        'YandexCheckout\\Model\\Receipt\\ReceiptItemAmount' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Receipt/ReceiptItemAmount.php',
        'YandexCheckout\\Model\\Receipt\\SettlementType' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Receipt/SettlementType.php',
        'YandexCheckout\\Model\\Recipient' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Recipient.php',
        'YandexCheckout\\Model\\RecipientInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/RecipientInterface.php',
        'YandexCheckout\\Model\\Refund' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Refund.php',
        'YandexCheckout\\Model\\RefundInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/RefundInterface.php',
        'YandexCheckout\\Model\\RefundStatus' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/RefundStatus.php',
        'YandexCheckout\\Model\\Requestor' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Requestor.php',
        'YandexCheckout\\Model\\RequestorInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/RequestorInterface.php',
        'YandexCheckout\\Model\\Settlement' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Settlement.php',
        'YandexCheckout\\Model\\SettlementInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/SettlementInterface.php',
        'YandexCheckout\\Model\\Source' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Source.php',
        'YandexCheckout\\Model\\SourceInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/SourceInterface.php',
        'YandexCheckout\\Model\\Status' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Status.php',
        'YandexCheckout\\Model\\Supplier' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Supplier.php',
        'YandexCheckout\\Model\\SupplierInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/SupplierInterface.php',
        'YandexCheckout\\Model\\Transfer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Transfer.php',
        'YandexCheckout\\Model\\TransferInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/TransferInterface.php',
        'YandexCheckout\\Model\\TransferStatus' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/TransferStatus.php',
        'YandexCheckout\\Model\\Webhook\\Webhook' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Model/Webhook/Webhook.php',
        'YandexCheckout\\Request\\PaymentOptionsRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/PaymentOptionsRequest.php',
        'YandexCheckout\\Request\\PaymentOptionsRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/PaymentOptionsRequestBuilder.php',
        'YandexCheckout\\Request\\PaymentOptionsRequestInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/PaymentOptionsRequestInterface.php',
        'YandexCheckout\\Request\\PaymentOptionsRequestSerializer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/PaymentOptionsRequestSerializer.php',
        'YandexCheckout\\Request\\PaymentOptionsResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/PaymentOptionsResponse.php',
        'YandexCheckout\\Request\\PaymentOptionsResponseItem' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/PaymentOptionsResponseItem.php',
        'YandexCheckout\\Request\\Payments\\AbstractPaymentResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/AbstractPaymentResponse.php',
        'YandexCheckout\\Request\\Payments\\CreatePaymentRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/CreatePaymentRequest.php',
        'YandexCheckout\\Request\\Payments\\CreatePaymentRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/CreatePaymentRequestBuilder.php',
        'YandexCheckout\\Request\\Payments\\CreatePaymentRequestInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/CreatePaymentRequestInterface.php',
        'YandexCheckout\\Request\\Payments\\CreatePaymentRequestSerializer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/CreatePaymentRequestSerializer.php',
        'YandexCheckout\\Request\\Payments\\CreatePaymentResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/CreatePaymentResponse.php',
        'YandexCheckout\\Request\\Payments\\PaymentResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/PaymentResponse.php',
        'YandexCheckout\\Request\\Payments\\Payment\\CancelResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/Payment/CancelResponse.php',
        'YandexCheckout\\Request\\Payments\\Payment\\CreateCaptureRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequest.php',
        'YandexCheckout\\Request\\Payments\\Payment\\CreateCaptureRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequestBuilder.php',
        'YandexCheckout\\Request\\Payments\\Payment\\CreateCaptureRequestInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequestInterface.php',
        'YandexCheckout\\Request\\Payments\\Payment\\CreateCaptureRequestSerializer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequestSerializer.php',
        'YandexCheckout\\Request\\Payments\\Payment\\CreateCaptureResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/Payment/CreateCaptureResponse.php',
        'YandexCheckout\\Request\\Payments\\PaymentsRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/PaymentsRequest.php',
        'YandexCheckout\\Request\\Payments\\PaymentsRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/PaymentsRequestBuilder.php',
        'YandexCheckout\\Request\\Payments\\PaymentsRequestInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/PaymentsRequestInterface.php',
        'YandexCheckout\\Request\\Payments\\PaymentsRequestSerializer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/PaymentsRequestSerializer.php',
        'YandexCheckout\\Request\\Payments\\PaymentsResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Payments/PaymentsResponse.php',
        'YandexCheckout\\Request\\Receipts\\AbstractReceiptResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/AbstractReceiptResponse.php',
        'YandexCheckout\\Request\\Receipts\\CreatePostReceiptRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/CreatePostReceiptRequest.php',
        'YandexCheckout\\Request\\Receipts\\CreatePostReceiptRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/CreatePostReceiptRequestBuilder.php',
        'YandexCheckout\\Request\\Receipts\\CreatePostReceiptRequestInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/CreatePostReceiptRequestInterface.php',
        'YandexCheckout\\Request\\Receipts\\CreatePostReceiptRequestSerializer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/CreatePostReceiptRequestSerializer.php',
        'YandexCheckout\\Request\\Receipts\\PaymentReceiptResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/PaymentReceiptResponse.php',
        'YandexCheckout\\Request\\Receipts\\ReceiptResponseFactory' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/ReceiptResponseFactory.php',
        'YandexCheckout\\Request\\Receipts\\ReceiptResponseInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/ReceiptResponseInterface.php',
        'YandexCheckout\\Request\\Receipts\\ReceiptResponseItem' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/ReceiptResponseItem.php',
        'YandexCheckout\\Request\\Receipts\\ReceiptResponseItemInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/ReceiptResponseItemInterface.php',
        'YandexCheckout\\Request\\Receipts\\ReceiptsResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/ReceiptsResponse.php',
        'YandexCheckout\\Request\\Receipts\\RefundReceiptResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Receipts/RefundReceiptResponse.php',
        'YandexCheckout\\Request\\Refunds\\AbstractRefundResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/AbstractRefundResponse.php',
        'YandexCheckout\\Request\\Refunds\\CreateRefundRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/CreateRefundRequest.php',
        'YandexCheckout\\Request\\Refunds\\CreateRefundRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/CreateRefundRequestBuilder.php',
        'YandexCheckout\\Request\\Refunds\\CreateRefundRequestInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/CreateRefundRequestInterface.php',
        'YandexCheckout\\Request\\Refunds\\CreateRefundRequestSerializer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/CreateRefundRequestSerializer.php',
        'YandexCheckout\\Request\\Refunds\\CreateRefundResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/CreateRefundResponse.php',
        'YandexCheckout\\Request\\Refunds\\RefundResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/RefundResponse.php',
        'YandexCheckout\\Request\\Refunds\\RefundsRequest' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/RefundsRequest.php',
        'YandexCheckout\\Request\\Refunds\\RefundsRequestBuilder' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/RefundsRequestBuilder.php',
        'YandexCheckout\\Request\\Refunds\\RefundsRequestInterface' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/RefundsRequestInterface.php',
        'YandexCheckout\\Request\\Refunds\\RefundsRequestSerializer' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/RefundsRequestSerializer.php',
        'YandexCheckout\\Request\\Refunds\\RefundsResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Refunds/RefundsResponse.php',
        'YandexCheckout\\Request\\Webhook\\WebhookListResponse' => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib/Request/Webhook/WebhookListResponse.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e3f4436005bc6ae82b08cd53eeead65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e3f4436005bc6ae82b08cd53eeead65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e3f4436005bc6ae82b08cd53eeead65::$classMap;

        }, null, ClassLoader::class);
    }
}
