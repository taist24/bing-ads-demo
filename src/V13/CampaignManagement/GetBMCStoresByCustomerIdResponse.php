<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the Bing Merchant Center stores for the specified customer.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getbmcstoresbycustomerid?view=bingads-13 GetBMCStoresByCustomerId Response Object
     * 
     * @uses BMCStore
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdResponse
    {
        /**
         * The list of Bing Merchant Center stores for the specified customer.
         * @var BMCStore[]
         */
        public $BMCStores;
    }
}