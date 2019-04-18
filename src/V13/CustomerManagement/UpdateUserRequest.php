<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the details of the specified user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/updateuser?view=bingads-13 UpdateUser Request Object
     * 
     * @uses User
     * @used-by BingAdsCustomerManagementService::UpdateUser
     */
    final class UpdateUserRequest
    {
        /**
         * The user object that contains the updated user information.
         * @var User
         */
        public $User;
    }
}
