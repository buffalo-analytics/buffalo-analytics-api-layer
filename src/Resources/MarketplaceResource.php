<?php

namespace Buffalo\Api\Resources;

use Buffalo\Api\BuffaloResponse;

class MarketplaceResource extends Resource
{
    protected function basePath(): string
    {
        return 'marketplace';
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function cart(array $query = []): BuffaloResponse
    {
        return $this->get('cart', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function cartItems(array $data = []): BuffaloResponse
    {
        return $this->post('cart/items', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function catalog(array $query = []): BuffaloResponse
    {
        return $this->get('catalog', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function checkout(array $data = []): BuffaloResponse
    {
        return $this->post('checkout', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function deleteCartItems(string|int $item, array $data = []): BuffaloResponse
    {
        return $this->delete("cart/items/{$item}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function fulfillmentsDispatch(string|int $fulfillment, array $data = []): BuffaloResponse
    {
        return $this->post("fulfillments/{$fulfillment}/dispatch", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function fulfillmentsPack(string|int $fulfillment, array $data = []): BuffaloResponse
    {
        return $this->post("fulfillments/{$fulfillment}/pack", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function fulfillmentsPick(string|int $fulfillment, array $data = []): BuffaloResponse
    {
        return $this->post("fulfillments/{$fulfillment}/pick", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getCatalog(string|int $listing, array $query = []): BuffaloResponse
    {
        return $this->get("catalog/{$listing}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getListings(string|int $listing, array $query = []): BuffaloResponse
    {
        return $this->get("listings/{$listing}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getOrders(string|int $order, array $query = []): BuffaloResponse
    {
        return $this->get("orders/{$order}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getOrdersPayments(string|int $order, array $query = []): BuffaloResponse
    {
        return $this->get("orders/{$order}/payments", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPrescriptions(string|int $prescription, array $query = []): BuffaloResponse
    {
        return $this->get("prescriptions/{$prescription}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPrescriptionsPdf(string|int $prescription, array $query = []): BuffaloResponse
    {
        return $this->get("prescriptions/{$prescription}/pdf", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getPrescriptionsVerify(string|int $uuid, array $query = []): BuffaloResponse
    {
        return $this->get("prescriptions/verify/{$uuid}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getShipments(string|int $shipment, array $query = []): BuffaloResponse
    {
        return $this->get("shipments/{$shipment}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSubOrders(string|int $subOrder, array $query = []): BuffaloResponse
    {
        return $this->get("sub-orders/{$subOrder}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSuppliers(string|int $supplier, array $query = []): BuffaloResponse
    {
        return $this->get("suppliers/{$supplier}", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSuppliersIntegrations(string|int $supplier, array $query = []): BuffaloResponse
    {
        return $this->get("suppliers/{$supplier}/integrations", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function getSuppliersLedger(string|int $supplier, array $query = []): BuffaloResponse
    {
        return $this->get("suppliers/{$supplier}/ledger", $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function listings(array $query = []): BuffaloResponse
    {
        return $this->get('listings', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function listingsBarcodes(string|int $listing, array $data = []): BuffaloResponse
    {
        return $this->post("listings/{$listing}/barcodes", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function listingsPrices(string|int $listing, array $data = []): BuffaloResponse
    {
        return $this->post("listings/{$listing}/prices", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function listingsStock(string|int $listing, array $data = []): BuffaloResponse
    {
        return $this->post("listings/{$listing}/stock", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function orders(array $query = []): BuffaloResponse
    {
        return $this->get('orders', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function ordersCancel(string|int $order, array $data = []): BuffaloResponse
    {
        return $this->post("orders/{$order}/cancel", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function ordersPermits(string|int $order, array $data = []): BuffaloResponse
    {
        return $this->post("orders/{$order}/permits", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function paymentsInitiate(array $data = []): BuffaloResponse
    {
        return $this->post('payments/initiate', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function paymentsPayfastCancel(array $query = []): BuffaloResponse
    {
        return $this->get('payments/payfast/cancel', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function paymentsPayfastIpn(array $data = []): BuffaloResponse
    {
        return $this->post('payments/payfast/ipn', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function paymentsPayfastSuccess(array $query = []): BuffaloResponse
    {
        return $this->get('payments/payfast/success', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function paymentsStripeWebhook(array $data = []): BuffaloResponse
    {
        return $this->post('payments/stripe/webhook', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postListings(array $data = []): BuffaloResponse
    {
        return $this->post('listings', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postPrescriptions(array $data = []): BuffaloResponse
    {
        return $this->post('prescriptions', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postRegulatoryRules(array $data = []): BuffaloResponse
    {
        return $this->post('regulatory-rules', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postSuppliers(array $data = []): BuffaloResponse
    {
        return $this->post('suppliers', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postTradeRestrictions(array $data = []): BuffaloResponse
    {
        return $this->post('trade-restrictions', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function postWarehouses(array $data = []): BuffaloResponse
    {
        return $this->post('warehouses', $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function prescriptions(array $query = []): BuffaloResponse
    {
        return $this->get('prescriptions', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function prescriptionsAttach(string|int $prescription, string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("prescriptions/{$prescription}/attach/{$subOrder}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function prescriptionsAuthPreference(array $query = []): BuffaloResponse
    {
        return $this->get('prescriptions/auth-preference', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function prescriptionsReject(string|int $prescription, array $data = []): BuffaloResponse
    {
        return $this->post("prescriptions/{$prescription}/reject", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function prescriptionsSign(string|int $prescription, array $data = []): BuffaloResponse
    {
        return $this->post("prescriptions/{$prescription}/sign", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function prescriptionsWhatsappOtp(array $data = []): BuffaloResponse
    {
        return $this->post('prescriptions/whatsapp-otp', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putCartItems(string|int $item, array $data = []): BuffaloResponse
    {
        return $this->put("cart/items/{$item}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putListings(string|int $listing, array $data = []): BuffaloResponse
    {
        return $this->put("listings/{$listing}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putPrescriptionsAuthPreference(array $data = []): BuffaloResponse
    {
        return $this->put('prescriptions/auth-preference', $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putRegulatoryRules(string|int $regulatoryRule, array $data = []): BuffaloResponse
    {
        return $this->put("regulatory-rules/{$regulatoryRule}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putSuppliers(string|int $supplier, array $data = []): BuffaloResponse
    {
        return $this->put("suppliers/{$supplier}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putTradeRestrictions(string|int $tradeRestriction, array $data = []): BuffaloResponse
    {
        return $this->put("trade-restrictions/{$tradeRestriction}", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function putWarehouses(string|int $warehouse, array $data = []): BuffaloResponse
    {
        return $this->put("warehouses/{$warehouse}", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function regulatoryRules(array $query = []): BuffaloResponse
    {
        return $this->get('regulatory-rules', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subOrdersCancel(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("sub-orders/{$subOrder}/cancel", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subOrdersConfirmDelivery(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("sub-orders/{$subOrder}/confirm-delivery", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subOrdersFulfillment(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("sub-orders/{$subOrder}/fulfillment", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subOrdersInvoice(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("sub-orders/{$subOrder}/invoice", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subOrdersRevertDelivery(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("sub-orders/{$subOrder}/revert-delivery", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function subOrdersShipments(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("sub-orders/{$subOrder}/shipments", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function supplierSubOrdersAccept(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("supplier/sub-orders/{$subOrder}/accept", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function supplierSubOrdersShip(string|int $subOrder, array $data = []): BuffaloResponse
    {
        return $this->post("supplier/sub-orders/{$subOrder}/ship", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function supplierWebhook(string|int $supplier, array $data = []): BuffaloResponse
    {
        return $this->post("supplier/{$supplier}/webhook", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function suppliers(array $query = []): BuffaloResponse
    {
        return $this->get('suppliers', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function suppliersIntegrations(string|int $supplier, array $data = []): BuffaloResponse
    {
        return $this->post("suppliers/{$supplier}/integrations", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function suppliersMy(array $query = []): BuffaloResponse
    {
        return $this->get('suppliers/my', $query);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function suppliersPayouts(string|int $supplier, array $data = []): BuffaloResponse
    {
        return $this->post("suppliers/{$supplier}/payouts", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function suppliersUsers(string|int $supplier, array $data = []): BuffaloResponse
    {
        return $this->post("suppliers/{$supplier}/users", $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function trackingWebhook(string|int $provider, array $data = []): BuffaloResponse
    {
        return $this->post("tracking/{$provider}/webhook", $data);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function tradeRestrictions(array $query = []): BuffaloResponse
    {
        return $this->get('trade-restrictions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function vcprCheck(array $query = []): BuffaloResponse
    {
        return $this->get('vcpr/check', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function vetPrescriptions(array $query = []): BuffaloResponse
    {
        return $this->get('vet/prescriptions', $query);
    }

    /**
     * @param  array<string, mixed>  $query
     */
    public function warehouses(array $query = []): BuffaloResponse
    {
        return $this->get('warehouses', $query);
    }
}
