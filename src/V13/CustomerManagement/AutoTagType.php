<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines possible values for an account level setting that determines whether to append or replace the supported UTM tracking codes.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/autotagtype?view=bingads-13 AutoTagType Value Set
     * 
     * @used-by AdvertiserAccount
     */
    final class AutoTagType
    {
        /** Bing Ads will not append any UTM tracking codes to your ad or keyword final URL. */
        const Inactive = 'Inactive';

        /** Bing Ads will automatically append the supported UTM tracking codes, and preserve any existing UTM tracking codes that you added to your ad or keyword's final URL. */
        const Preserve = 'Preserve';

        /** Bing Ads will automatically append the supported UTM tracking codes, and replace any of the existing and supported UTM tracking codes that you added to your ad or keyword's final URL. */
        const Replace = 'Replace';
    }

}
