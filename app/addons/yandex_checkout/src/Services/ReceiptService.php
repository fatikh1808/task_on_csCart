<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Addons\YandexCheckout\Services;

use Tygh\Addons\RusTaxes\TaxType;
use Tygh\Addons\YandexCheckout\Enum\PaymentMode;
use Tygh\Addons\YandexCheckout\Enum\SettlementType;

/**
 * Class ReceiptService allows modify receipts into needed for Yandex.Checkout API form.
 *
 * @package Tygh\Addons\YandexCheckout\Services
 */
class ReceiptService
{
    /** @var \Tygh\Addons\RusTaxes\ReceiptFactory $receipt_factory */
    protected $receipt_factory;

    protected $taxes_map = [];

    /** @var \Tygh\Addons\YandexCheckout\Services\PaymentService */
    protected $payment_service;

    public function __construct($receipt_factory, array $taxes_map, PaymentService $payment_service)
    {
        $this->receipt_factory = $receipt_factory;
        $this->taxes_map = $taxes_map;
        $this->payment_service = $payment_service;
    }

    /**
     * @param string $phone
     *
     * @return string|string[]
     */
    protected function normalizePhone($phone)
    {
        $phone_normalize = '';

        if (!empty($phone)) {
            if (strpos('+', $phone) !== 0 && $phone[0] == '8') {
                $phone[0] = '7';
            }
            $phone_normalize = preg_replace('/\D/', '', $phone);
        }
        return $phone_normalize;
    }

    /**
     * @param array $order_info
     * @param string $payment_mode
     *
     * @return array
     */
    public function getReceiptFromOrder(array $order_info, $payment_mode)
    {
        $receipt = $this->receipt_factory->createReceiptFromOrder($order_info, $order_info['payment_method']['processor_params']['currency']);

        $receipt->setPhone($this->normalizePhone($receipt->getPhone()));

        $products = [];
        foreach ($receipt->getItems() as $item) {
            $products[] = [
                'description' => $item->getName(),
                'quantity' => $item->getQuantity(),
                'amount' => [
                    'value' => $item->getPrice(),
                    'currency' => $order_info['payment_method']['processor_params']['currency'],
                ],
                'vat_code' => isset($this->taxes_map[$item->getTaxType()])
                    ? $this->taxes_map[$item->getTaxType()]
                    : $this->taxes_map[TaxType::NONE],
                'payment_mode' => $payment_mode,
            ];
        }
        $customer = [
            'email' => $receipt->getEmail(),
            'phone' => $receipt->getPhone(),
        ];
        return ['customer' => $customer, 'items' => $products];
    }

    /**
     * @param array  $order_info
     * @param string $shop_id
     * @param string $payment_mode
     * @param string $settlement_type
     *
     * @return array
     */
    public function getPaymentReceiptFromOrder(array $order_info, $shop_id = null, $payment_mode = PaymentMode::FULL_PAYMENT, $settlement_type = SettlementType::PREPAYMENT)
    {
        $receipt_data = $this->getReceiptFromOrder($order_info, $payment_mode);

        $receipt = [
            'type' => 'payment',
            'payment_id' => $this->payment_service->getPaymentId($order_info),
            'customer' => $receipt_data['customer'],
            'items' => $receipt_data['items'],
            'send' => true,
            'settlements' => [
                [
                    'type' => $settlement_type,
                    'amount' => [
                        'value' => $order_info['total'],
                        'currency' => $order_info['payment_method']['processor_params']['currency'],
                    ],
                ],
            ],
        ];

        if ($shop_id) {
            $receipt['on_behalf_of'] = $shop_id;
        }

        return $receipt;
    }
}