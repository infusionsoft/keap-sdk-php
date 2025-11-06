# core-v2-client

Keap REST Core Service

For more information, please visit [https://developer.keap.com/get-support/](https://developer.keap.com/get-support/).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/infusionsoft/keap-sdk.git"
    }
  ],
  "require": {
    "keap/keap-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/core-v2-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Keap\Core\V2\Api\AffiliateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_affiliate_request = new \Keap\Core\V2\Model\CreateAffiliateRequest(); // \Keap\Core\V2\Model\CreateAffiliateRequest | Affiliate request to insert

try {
    $result = $apiInstance->addAffiliate($create_affiliate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addAffiliate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.keap.com/crm/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AffiliateApi* | [**addAffiliate**](docs/Api/AffiliateApi.md#addaffiliate) | **POST** /v2/affiliates | Create an Affiliate
*AffiliateApi* | [**addAffiliateToProgram**](docs/Api/AffiliateApi.md#addaffiliatetoprogram) | **POST** /v2/affiliates/{id}:assignToProgram | Assign Affiliate to Commission program
*AffiliateApi* | [**addCommissionProgram**](docs/Api/AffiliateApi.md#addcommissionprogram) | **POST** /v2/affiliates/commissionPrograms | Create an Affiliate Commission Program
*AffiliateApi* | [**assignProductCommissionProgram**](docs/Api/AffiliateApi.md#assignproductcommissionprogram) | **POST** /v2/affiliates/commissionPrograms/productCommissionPrograms/{commission_program_id} | Assign a Product Commission Program
*AffiliateApi* | [**assignSubscriptionCommissionProgram**](docs/Api/AffiliateApi.md#assignsubscriptioncommissionprogram) | **POST** /v2/affiliates/commissionPrograms/subscriptionCommissionPrograms/{commission_program_id} | Assign a Subscription Commission Program
*AffiliateApi* | [**createAffiliateCustomField**](docs/Api/AffiliateApi.md#createaffiliatecustomfield) | **POST** /v2/affiliates/model/customFields | Create an Affiliate Custom Field
*AffiliateApi* | [**createDefaultCommissionProgram**](docs/Api/AffiliateApi.md#createdefaultcommissionprogram) | **POST** /v2/affiliates/commissionPrograms/defaultCommissionPrograms/{commission_program_id} | Create a Default Commission Program
*AffiliateApi* | [**createRedirectLink**](docs/Api/AffiliateApi.md#createredirectlink) | **POST** /v2/affiliates/redirects | Create an Affiliate Link
*AffiliateApi* | [**deleteAffiliate**](docs/Api/AffiliateApi.md#deleteaffiliate) | **DELETE** /v2/affiliates/{id} | Delete Affiliate
*AffiliateApi* | [**deleteAffiliateCommissionProgram**](docs/Api/AffiliateApi.md#deleteaffiliatecommissionprogram) | **DELETE** /v2/affiliates/commissionPrograms/{commission_program_id} | Delete a Commission Program
*AffiliateApi* | [**deleteAffiliateCustomField**](docs/Api/AffiliateApi.md#deleteaffiliatecustomfield) | **DELETE** /v2/affiliates/model/customFields/{custom_field_id} | Delete a Custom Field
*AffiliateApi* | [**deleteRedirectLink**](docs/Api/AffiliateApi.md#deleteredirectlink) | **DELETE** /v2/affiliates/redirects/{redirect_id} | Delete an Affiliate Link
*AffiliateApi* | [**getAffiliate**](docs/Api/AffiliateApi.md#getaffiliate) | **GET** /v2/affiliates/{id} | Retrieve an Affiliate
*AffiliateApi* | [**getAffiliateCommissionTotal**](docs/Api/AffiliateApi.md#getaffiliatecommissiontotal) | **GET** /v2/affiliates/{affiliate_id}/commissionTotal | Retrieve Affiliate Commission Earned and View LedgerURl for portal
*AffiliateApi* | [**getAffiliateCommissions**](docs/Api/AffiliateApi.md#getaffiliatecommissions) | **GET** /v2/affiliates/{affiliate_id}:commissions | Retrieve Affiliate Commission and Clawbacks
*AffiliateApi* | [**getAffiliateCustomFields**](docs/Api/AffiliateApi.md#getaffiliatecustomfields) | **GET** /v2/affiliates/model | Retrieve Affiliate Model
*AffiliateApi* | [**getCommissionProgram**](docs/Api/AffiliateApi.md#getcommissionprogram) | **GET** /v2/affiliates/commissionPrograms/{commission_program_id} | Retrieve a Commission Program
*AffiliateApi* | [**getRedirectLink**](docs/Api/AffiliateApi.md#getredirectlink) | **GET** /v2/affiliates/redirects/{redirect_id} | Retrieve an Affiliate Link
*AffiliateApi* | [**listAffiliate**](docs/Api/AffiliateApi.md#listaffiliate) | **GET** /v2/affiliates | List Affiliates
*AffiliateApi* | [**listAffiliateCommissionPrograms**](docs/Api/AffiliateApi.md#listaffiliatecommissionprograms) | **GET** /v2/affiliates/commissionPrograms | List Affiliate Commission Programs
*AffiliateApi* | [**listAffiliateLinks**](docs/Api/AffiliateApi.md#listaffiliatelinks) | **GET** /v2/affiliates/redirects | List Affiliate Links
*AffiliateApi* | [**listAffiliatePayments**](docs/Api/AffiliateApi.md#listaffiliatepayments) | **GET** /v2/affiliates/{affiliate_id}/payments | List Affiliate Payments
*AffiliateApi* | [**listSummaries**](docs/Api/AffiliateApi.md#listsummaries) | **GET** /v2/affiliates/summaries | List Affiliate Summaries
*AffiliateApi* | [**removeAffiliateFromProgram**](docs/Api/AffiliateApi.md#removeaffiliatefromprogram) | **POST** /v2/affiliates/{id}:removeFromProgram | Remove an Affiliate from a Commission Program
*AffiliateApi* | [**removeProductCommissionFromCommissions**](docs/Api/AffiliateApi.md#removeproductcommissionfromcommissions) | **POST** /v2/affiliates/commissionPrograms/{commission_id}:removeProductCommission | Remove a Product from a Commission Program
*AffiliateApi* | [**removeSubscriptionPlanCommissionFromCommissions**](docs/Api/AffiliateApi.md#removesubscriptionplancommissionfromcommissions) | **POST** /v2/affiliates/commissionPrograms/{commission_id}:removeSubscriptionCommission | Remove a Subscription from a Commission Program
*AffiliateApi* | [**updateAffiliate**](docs/Api/AffiliateApi.md#updateaffiliate) | **PATCH** /v2/affiliates/{id} | Update an Affiliate
*AffiliateApi* | [**updateAffiliateCustomField**](docs/Api/AffiliateApi.md#updateaffiliatecustomfield) | **PATCH** /v2/affiliates/model/customFields/{custom_field_id} | Update a Custom Field
*AffiliateApi* | [**updateCommissionProgram**](docs/Api/AffiliateApi.md#updatecommissionprogram) | **PATCH** /v2/affiliates/commissionPrograms/{commission_program_id} | Update an Affiliate Commission Program
*AffiliateApi* | [**updateDefaultCommissionProgram**](docs/Api/AffiliateApi.md#updatedefaultcommissionprogram) | **PATCH** /v2/affiliates/commissionPrograms/defaultCommissionPrograms/{commission_program_id} | Update a Default Commission Program
*AffiliateApi* | [**updateProductCommissionProgram**](docs/Api/AffiliateApi.md#updateproductcommissionprogram) | **PATCH** /v2/affiliates/commissionPrograms/productCommissionPrograms/{commission_program_id} | Update a Product Commission Program
*AffiliateApi* | [**updateRedirectLink**](docs/Api/AffiliateApi.md#updateredirectlink) | **PATCH** /v2/affiliates/redirects/{redirect_id} | Update an Affiliate Link
*AffiliateApi* | [**updateSubscriptionCommissionProgram**](docs/Api/AffiliateApi.md#updatesubscriptioncommissionprogram) | **PATCH** /v2/affiliates/commissionPrograms/subscriptionCommissionPrograms/{commission_program_id} | Update a Subscription Commission Program
*AutomationApi* | [**addContactsToAutomationSequence**](docs/Api/AutomationApi.md#addcontactstoautomationsequence) | **POST** /v2/automations/{automation_id}/sequences/{sequence_id}:addContacts | Add Contacts to an Automation Sequence
*AutomationApi* | [**bulkAssignmentAutomationsCategories**](docs/Api/AutomationApi.md#bulkassignmentautomationscategories) | **POST** /v2/automations/categories/batchAssign | Bulk update for Automations Categories
*AutomationApi* | [**deleteAutomation**](docs/Api/AutomationApi.md#deleteautomation) | **DELETE** /v2/automations | Delete an Automation
*AutomationApi* | [**getAutomation**](docs/Api/AutomationApi.md#getautomation) | **GET** /v2/automations/{automation_id} | Retrieve an Automation
*AutomationApi* | [**listAllAutomationIds**](docs/Api/AutomationApi.md#listallautomationids) | **GET** /v2/automations/ids | List Automations Ids
*AutomationApi* | [**listAutomations**](docs/Api/AutomationApi.md#listautomations) | **GET** /v2/automations | List Automations
*AutomationCategoryApi* | [**createCategory**](docs/Api/AutomationCategoryApi.md#createcategory) | **POST** /v2/automationCategory | Create automation category
*AutomationCategoryApi* | [**deleteCategories**](docs/Api/AutomationCategoryApi.md#deletecategories) | **DELETE** /v2/automationCategory | Delete automation category
*AutomationCategoryApi* | [**listCategories**](docs/Api/AutomationCategoryApi.md#listcategories) | **GET** /v2/automationCategory | List automation categories
*AutomationCategoryApi* | [**patchCategory**](docs/Api/AutomationCategoryApi.md#patchcategory) | **PATCH** /v2/automationCategory/{id} | Update automation category
*BusinessProfileApi* | [**getBusinessProfile**](docs/Api/BusinessProfileApi.md#getbusinessprofile) | **GET** /v2/businessProfile | Retrieve Business Profile
*BusinessProfileApi* | [**updateBusinessProfile**](docs/Api/BusinessProfileApi.md#updatebusinessprofile) | **PATCH** /v2/businessProfile | Update Business Profile
*CampaignApi* | [**addContactsToCampaignSequence**](docs/Api/CampaignApi.md#addcontactstocampaignsequence) | **POST** /v2/campaigns/{campaign_id}/sequences/{sequence_id}:addContacts | Add Contacts to Campaign Sequence
*CampaignApi* | [**getCampaign**](docs/Api/CampaignApi.md#getcampaign) | **GET** /v2/campaigns/{campaign_id} | Retrieve a Campaign
*CampaignApi* | [**getCampaignGoals**](docs/Api/CampaignApi.md#getcampaigngoals) | **GET** /v2/campaigns/{campaign_id}/goals | Retrieve a list of Goals for a Campaign
*CampaignApi* | [**getCampaignSequences**](docs/Api/CampaignApi.md#getcampaignsequences) | **GET** /v2/campaigns/{campaign_id}/sequences | Retrieve a list of Sequences for a Campaign
*CampaignApi* | [**listCampaigns**](docs/Api/CampaignApi.md#listcampaigns) | **GET** /v2/campaigns | List Campaigns
*CampaignApi* | [**removeContactsFromCampaignSequence**](docs/Api/CampaignApi.md#removecontactsfromcampaignsequence) | **POST** /v2/campaigns/{campaign_id}/sequences/{sequence_id}:removeContacts | Remove Contacts from Campaign Sequence
*CategoryDiscountsApi* | [**createCategoryDiscount**](docs/Api/CategoryDiscountsApi.md#createcategorydiscount) | **POST** /v2/discounts/productCategories | Create a Category Discount
*CategoryDiscountsApi* | [**deleteCategoryDiscount**](docs/Api/CategoryDiscountsApi.md#deletecategorydiscount) | **DELETE** /v2/discounts/productCategories/{discount_id} | Delete a Category Discount
*CategoryDiscountsApi* | [**getCategoryDiscount**](docs/Api/CategoryDiscountsApi.md#getcategorydiscount) | **GET** /v2/discounts/productCategories/{discount_id} | Retrieve a Category Discount
*CategoryDiscountsApi* | [**listCategoryDiscounts**](docs/Api/CategoryDiscountsApi.md#listcategorydiscounts) | **GET** /v2/discounts/productCategories | List Category Discounts
*CategoryDiscountsApi* | [**updateCategoryDiscount**](docs/Api/CategoryDiscountsApi.md#updatecategorydiscount) | **PATCH** /v2/discounts/productCategories/{discount_id} | Update a Category Discount
*CompanyApi* | [**createCompany**](docs/Api/CompanyApi.md#createcompany) | **POST** /v2/companies | Create a Company
*CompanyApi* | [**deleteCompany**](docs/Api/CompanyApi.md#deletecompany) | **DELETE** /v2/companies/{company_id} | Delete a Company
*CompanyApi* | [**getCompany**](docs/Api/CompanyApi.md#getcompany) | **GET** /v2/companies/{company_id} | Retrieve a Company
*CompanyApi* | [**listCompanies**](docs/Api/CompanyApi.md#listcompanies) | **GET** /v2/companies | List Companies
*CompanyApi* | [**updateCompany**](docs/Api/CompanyApi.md#updatecompany) | **PATCH** /v2/companies/{company_id} | Update a Company
*ContactApi* | [**createContact**](docs/Api/ContactApi.md#createcontact) | **POST** /v2/contacts | Create a Contact
*ContactApi* | [**createContactLinkType**](docs/Api/ContactApi.md#createcontactlinktype) | **POST** /v2/contacts/links/types | Create a Contact Link type
*ContactApi* | [**deleteContact**](docs/Api/ContactApi.md#deletecontact) | **DELETE** /v2/contacts/{contact_id} | Delete a Contact
*ContactApi* | [**getContact**](docs/Api/ContactApi.md#getcontact) | **GET** /v2/contacts/{contact_id} | Retrieve a Contact
*ContactApi* | [**linkContacts**](docs/Api/ContactApi.md#linkcontacts) | **POST** /v2/contacts:link | Link Contacts
*ContactApi* | [**listContactLinkTypes**](docs/Api/ContactApi.md#listcontactlinktypes) | **GET** /v2/contacts/links/types | List Contact Link types
*ContactApi* | [**listContactLinks**](docs/Api/ContactApi.md#listcontactlinks) | **GET** /v2/contacts/{contact_id}/links | List Linked Contacts
*ContactApi* | [**listContacts**](docs/Api/ContactApi.md#listcontacts) | **GET** /v2/contacts | List Contacts
*ContactApi* | [**retrieveContactModel**](docs/Api/ContactApi.md#retrievecontactmodel) | **GET** /v2/contacts/model | Retrieve Contact Model
*ContactApi* | [**unlinkContacts**](docs/Api/ContactApi.md#unlinkcontacts) | **POST** /v2/contacts:unlink | Delete Link between two Contacts
*ContactApi* | [**updateContact**](docs/Api/ContactApi.md#updatecontact) | **PATCH** /v2/contacts/{contact_id} | Update a Contact
*EmailApi* | [**createEmail**](docs/Api/EmailApi.md#createemail) | **POST** /v2/emails | Create an Email Record
*EmailApi* | [**createEmails**](docs/Api/EmailApi.md#createemails) | **POST** /v2/emails:batchAdd | Create a set of Email Records
*EmailApi* | [**deleteEmail**](docs/Api/EmailApi.md#deleteemail) | **DELETE** /v2/emails/{id} | Delete an Email Record
*EmailApi* | [**deleteEmails**](docs/Api/EmailApi.md#deleteemails) | **POST** /v2/emails:batchRemove | Remove a set of Email Records
*EmailApi* | [**getEmail**](docs/Api/EmailApi.md#getemail) | **GET** /v2/emails/{id} | Retrieve an Email
*EmailApi* | [**getEmailTemplate**](docs/Api/EmailApi.md#getemailtemplate) | **GET** /v2/emails/templates/{email_template_id} | Retrieve an email template
*EmailApi* | [**listEmails**](docs/Api/EmailApi.md#listemails) | **GET** /v2/emails | List Emails
*EmailApi* | [**sendEmail**](docs/Api/EmailApi.md#sendemail) | **POST** /v2/emails:send | Send an Email
*EmailApi* | [**sendEmailTemplate**](docs/Api/EmailApi.md#sendemailtemplate) | **POST** /v2/emails/templates:send | Send an email based on a template
*EmailAddressApi* | [**getEmailAddressStatus**](docs/Api/EmailAddressApi.md#getemailaddressstatus) | **GET** /v2/emailAddresses/{email}/status | Retrieve an Email Address status
*EmailAddressApi* | [**updateEmailAddressOptStatus**](docs/Api/EmailAddressApi.md#updateemailaddressoptstatus) | **PATCH** /v2/emailAddresses/{email}/status | Update an Email Address opt-in status
*FilesApi* | [**createFile**](docs/Api/FilesApi.md#createfile) | **POST** /v2/files | Create a file
*FilesApi* | [**deleteFile**](docs/Api/FilesApi.md#deletefile) | **DELETE** /v2/files/{file_id} | Delete a file
*FilesApi* | [**getFile**](docs/Api/FilesApi.md#getfile) | **GET** /v2/files/{file_id} | Retrieve a file
*FilesApi* | [**getFileData**](docs/Api/FilesApi.md#getfiledata) | **GET** /v2/files/{file_id}:data | Retrieve a file&#39;s data
*FilesApi* | [**listFiles**](docs/Api/FilesApi.md#listfiles) | **GET** /v2/files | List all files
*FilesApi* | [**updateFile**](docs/Api/FilesApi.md#updatefile) | **POST** /v2/files/{file_id} | Update a file
*FreeTrialDiscountsApi* | [**createFreeTrialDiscount**](docs/Api/FreeTrialDiscountsApi.md#createfreetrialdiscount) | **POST** /v2/discounts/freeTrials | Create a Subscription Free Trial Discount
*FreeTrialDiscountsApi* | [**deleteFreeTrialDiscount**](docs/Api/FreeTrialDiscountsApi.md#deletefreetrialdiscount) | **DELETE** /v2/discounts/freeTrials/{discount_id} | Delete a Subscription Free Trial Discount
*FreeTrialDiscountsApi* | [**getFreeTrialDiscount**](docs/Api/FreeTrialDiscountsApi.md#getfreetrialdiscount) | **GET** /v2/discounts/freeTrials/{discount_id} | Retrieve a Subscription Free Trial Discount
*FreeTrialDiscountsApi* | [**listFreeTrialDiscounts**](docs/Api/FreeTrialDiscountsApi.md#listfreetrialdiscounts) | **GET** /v2/discounts/freeTrials | List all Subscription Free Trial Discounts
*FreeTrialDiscountsApi* | [**updateFreeTrialDiscount**](docs/Api/FreeTrialDiscountsApi.md#updatefreetrialdiscount) | **PATCH** /v2/discounts/freeTrials/{discount_id} | Update a Subscription Free Trial Discount
*LeadScoreApi* | [**getLeadScoreDetails**](docs/Api/LeadScoreApi.md#getleadscoredetails) | **GET** /v2/contacts/{contact_id}/leadScore | Retrieve Lead Score of a Contact
*LeadSourceCategoriesApi* | [**createLeadSourceCategory**](docs/Api/LeadSourceCategoriesApi.md#createleadsourcecategory) | **POST** /v2/leadSourceCategories | Create a Lead Source Category
*LeadSourceCategoriesApi* | [**deleteLeadSourceCategory**](docs/Api/LeadSourceCategoriesApi.md#deleteleadsourcecategory) | **DELETE** /v2/leadSourceCategories/{lead_source_category_id} | Delete a Lead Source Category
*LeadSourceCategoriesApi* | [**getLeadSourceCategory**](docs/Api/LeadSourceCategoriesApi.md#getleadsourcecategory) | **GET** /v2/leadSourceCategories/{lead_source_category_id} | Retrieve a Lead Source Category
*LeadSourceCategoriesApi* | [**listLeadSourceCategories**](docs/Api/LeadSourceCategoriesApi.md#listleadsourcecategories) | **GET** /v2/leadSourceCategories | List Lead Source Categories
*LeadSourceCategoriesApi* | [**updateLeadSourceCategory**](docs/Api/LeadSourceCategoriesApi.md#updateleadsourcecategory) | **PATCH** /v2/leadSourceCategories/{lead_source_category_id} | Update a Lead Source Category
*LeadSourceExpensesApi* | [**createLeadSourceExpense**](docs/Api/LeadSourceExpensesApi.md#createleadsourceexpense) | **POST** /v2/leadSources/{lead_source_id}/expenses | Create a Lead Source Expense
*LeadSourceExpensesApi* | [**deleteLeadSourceExpense**](docs/Api/LeadSourceExpensesApi.md#deleteleadsourceexpense) | **DELETE** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Delete a lead source expense
*LeadSourceExpensesApi* | [**getLeadSourceExpense**](docs/Api/LeadSourceExpensesApi.md#getleadsourceexpense) | **GET** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Retrieve a Lead Source Expense
*LeadSourceExpensesApi* | [**listLeadSourceExpenses**](docs/Api/LeadSourceExpensesApi.md#listleadsourceexpenses) | **GET** /v2/leadSources/{lead_source_id}/expenses | List Lead Source Expenses
*LeadSourceExpensesApi* | [**updateLeadSourceExpense**](docs/Api/LeadSourceExpensesApi.md#updateleadsourceexpense) | **PATCH** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Update a Lead Source Expense
*LeadSourceRecurringExpensesApi* | [**createLeadSourceRecurringExpense**](docs/Api/LeadSourceRecurringExpensesApi.md#createleadsourcerecurringexpense) | **POST** /v2/leadSources/{lead_source_id}/recurringExpenses | Create a Lead Source Recurring Expense
*LeadSourceRecurringExpensesApi* | [**deleteLeadSourceRecurringExpense**](docs/Api/LeadSourceRecurringExpensesApi.md#deleteleadsourcerecurringexpense) | **DELETE** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Delete a Lead Source Recurring Expense
*LeadSourceRecurringExpensesApi* | [**getLeadSourceRecurringExpense**](docs/Api/LeadSourceRecurringExpensesApi.md#getleadsourcerecurringexpense) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Retrieve a Lead Source Recurring Expense
*LeadSourceRecurringExpensesApi* | [**listExpensesIncurredFromLeadSourceRecurringExpense**](docs/Api/LeadSourceRecurringExpensesApi.md#listexpensesincurredfromleadsourcerecurringexpense) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id}/expenses | Retrieves a list of expenses incurred from a recurring expense
*LeadSourceRecurringExpensesApi* | [**listLeadSourceRecurringExpenses**](docs/Api/LeadSourceRecurringExpensesApi.md#listleadsourcerecurringexpenses) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses | Retrieves a list of lead source recurring expenses
*LeadSourceRecurringExpensesApi* | [**updateLeadSourceRecurringExpense**](docs/Api/LeadSourceRecurringExpensesApi.md#updateleadsourcerecurringexpense) | **PATCH** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Update a Lead Source Recurring Expense
*LeadSourcesApi* | [**createLeadSource**](docs/Api/LeadSourcesApi.md#createleadsource) | **POST** /v2/leadSources | Create a Lead Source
*LeadSourcesApi* | [**deleteLeadSource**](docs/Api/LeadSourcesApi.md#deleteleadsource) | **DELETE** /v2/leadSources/{lead_source_id} | Delete a Lead Source
*LeadSourcesApi* | [**getLeadSource**](docs/Api/LeadSourcesApi.md#getleadsource) | **GET** /v2/leadSources/{lead_source_id} | Retrieve a Lead Source
*LeadSourcesApi* | [**listLeadSources**](docs/Api/LeadSourcesApi.md#listleadsources) | **GET** /v2/leadSources | List Lead Sources
*LeadSourcesApi* | [**updateLeadSource**](docs/Api/LeadSourcesApi.md#updateleadsource) | **PATCH** /v2/leadSources/{lead_source_id} | Update a Lead Source
*LocaleApi* | [**getCountryByCode**](docs/Api/LocaleApi.md#getcountrybycode) | **GET** /v2/locales/countries/{country_code} | Get Country
*LocaleApi* | [**getProvinceByCode**](docs/Api/LocaleApi.md#getprovincebycode) | **GET** /v2/locales/countries/{country_code}/provinces/{province_code} | Get Province
*LocaleApi* | [**listCountries**](docs/Api/LocaleApi.md#listcountries) | **GET** /v2/locales/countries | List Countries
*LocaleApi* | [**listProvincesForCountry**](docs/Api/LocaleApi.md#listprovincesforcountry) | **GET** /v2/locales/countries/{country_code}/provinces | List a Country&#39;s Province
*MerchantsApi* | [**listMerchants**](docs/Api/MerchantsApi.md#listmerchants) | **GET** /v2/merchants | List Merchant accounts
*NoteApi* | [**createNote**](docs/Api/NoteApi.md#createnote) | **POST** /v2/contacts/{contact_id}/notes | Create a Note
*NoteApi* | [**createNoteCustomField**](docs/Api/NoteApi.md#createnotecustomfield) | **POST** /v2/notes/model/customFields | Create a Custom Field
*NoteApi* | [**deleteNote**](docs/Api/NoteApi.md#deletenote) | **DELETE** /v2/contacts/{contact_id}/notes/{note_id} | Delete a Note
*NoteApi* | [**getNote**](docs/Api/NoteApi.md#getnote) | **GET** /v2/contacts/{contact_id}/notes/{note_id} | Retrieve a Note
*NoteApi* | [**listNoteTemplates**](docs/Api/NoteApi.md#listnotetemplates) | **GET** /v2/notes/templates | Retrieve Note Templates
*NoteApi* | [**listNotes**](docs/Api/NoteApi.md#listnotes) | **GET** /v2/contacts/{contact_id}/notes | List Notes
*NoteApi* | [**retrieveNoteModel**](docs/Api/NoteApi.md#retrievenotemodel) | **GET** /v2/notes/model | Retrieve Note Model
*NoteApi* | [**updateNote**](docs/Api/NoteApi.md#updatenote) | **PATCH** /v2/contacts/{contact_id}/notes/{note_id} | Update a Note
*NoteApi* | [**updateNotesCustomField**](docs/Api/NoteApi.md#updatenotescustomfield) | **PATCH** /v2/notes/model/customFields/{custom_field_id} | Update a Custom Field
*OpportunityApi* | [**createOpportunity**](docs/Api/OpportunityApi.md#createopportunity) | **POST** /v2/opportunities | Create an Opportunity
*OpportunityApi* | [**createOpportunityCustomFields**](docs/Api/OpportunityApi.md#createopportunitycustomfields) | **POST** /v2/opportunities/model/customFields | Create an Opportunity Custom Field
*OpportunityApi* | [**createOpportunityStage**](docs/Api/OpportunityApi.md#createopportunitystage) | **POST** /v2/opportunities/stages | Create an Opportunity Stage
*OpportunityApi* | [**deleteOpportunity**](docs/Api/OpportunityApi.md#deleteopportunity) | **DELETE** /v2/opportunities/{opportunity_id} | Delete an Opportunity
*OpportunityApi* | [**deleteOpportunityStage**](docs/Api/OpportunityApi.md#deleteopportunitystage) | **DELETE** /v2/opportunities/stages/{stage_id} | Delete an Opportunity Stage
*OpportunityApi* | [**getOpportunity**](docs/Api/OpportunityApi.md#getopportunity) | **GET** /v2/opportunities/{opportunity_id} | Retrieve a Opportunity
*OpportunityApi* | [**getOpportunityStage**](docs/Api/OpportunityApi.md#getopportunitystage) | **GET** /v2/opportunities/stages/{stage_id} | Retrieve an Opportunity Stage
*OpportunityApi* | [**listOpportunities**](docs/Api/OpportunityApi.md#listopportunities) | **GET** /v2/opportunities | List Opportunities
*OpportunityApi* | [**listOpportunityStages**](docs/Api/OpportunityApi.md#listopportunitystages) | **GET** /v2/opportunities/stages | List of Opportunity Stages
*OpportunityApi* | [**updateOpportunity**](docs/Api/OpportunityApi.md#updateopportunity) | **PATCH** /v2/opportunities/{opportunity_id} | Update an opportunity
*OpportunityApi* | [**updateOpportunityCustomField**](docs/Api/OpportunityApi.md#updateopportunitycustomfield) | **PATCH** /v2/opportunities/model/customFields/{custom_field_id} | Update a Opportunity&#39;s Custom Field
*OpportunityApi* | [**updateOpportunityStage**](docs/Api/OpportunityApi.md#updateopportunitystage) | **PATCH** /v2/opportunities/stages/{stage_id} | Update an Opportunity Stage
*OrderTotalDiscountsApi* | [**createOrderTotalDiscount**](docs/Api/OrderTotalDiscountsApi.md#createordertotaldiscount) | **POST** /v2/discounts/orderTotals | Create an Order Total Discount
*OrderTotalDiscountsApi* | [**deleteOrderTotalDiscount**](docs/Api/OrderTotalDiscountsApi.md#deleteordertotaldiscount) | **DELETE** /v2/discounts/orderTotals/{discount_id} | Delete an Order Total Discount
*OrderTotalDiscountsApi* | [**getOrderTotalDiscount**](docs/Api/OrderTotalDiscountsApi.md#getordertotaldiscount) | **GET** /v2/discounts/orderTotals/{discount_id} | Retrieve an Order Total Discount
*OrderTotalDiscountsApi* | [**listOrderTotalDiscounts**](docs/Api/OrderTotalDiscountsApi.md#listordertotaldiscounts) | **GET** /v2/discounts/orderTotals | List all Order Total Discounts
*OrderTotalDiscountsApi* | [**updateOrderTotalDiscount**](docs/Api/OrderTotalDiscountsApi.md#updateordertotaldiscount) | **PATCH** /v2/discounts/orderTotals/{discount_id} | Update an Order Total Discount
*OrdersApi* | [**applyCommissionOnOrderItems**](docs/Api/OrdersApi.md#applycommissiononorderitems) | **POST** /v2/orders/{order_id}/items/{order_item_id}:applyCommission | Apply Commission to an Order Item
*OrdersApi* | [**applyTax**](docs/Api/OrdersApi.md#applytax) | **POST** /v2/orders/{order_id}:applyTax | Apply Taxes on an Order
*OrdersApi* | [**attachFileToOrder**](docs/Api/OrdersApi.md#attachfiletoorder) | **POST** /v2/orders/{order_id}:attachFile | Attach a File to an Order Invoice
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /v2/orders | Create an Order
*OrdersApi* | [**createOrderCustomField**](docs/Api/OrdersApi.md#createordercustomfield) | **POST** /v2/orders/model/customFields | Create an Order Custom Field
*OrdersApi* | [**createOrderItem**](docs/Api/OrdersApi.md#createorderitem) | **POST** /v2/orders/{order_id}/items | Create an Order Item
*OrdersApi* | [**createPaymentForAnOrder**](docs/Api/OrdersApi.md#createpaymentforanorder) | **POST** /v2/orders/{order_id}/payments | Create a Payment
*OrdersApi* | [**deleteOrder**](docs/Api/OrdersApi.md#deleteorder) | **DELETE** /v2/orders/{order_id} | Delete an Order
*OrdersApi* | [**deleteOrderCustomField**](docs/Api/OrdersApi.md#deleteordercustomfield) | **DELETE** /v2/orders/model/customFields/{custom_field_id} | Delete an Order Custom Field
*OrdersApi* | [**deleteOrderItem**](docs/Api/OrdersApi.md#deleteorderitem) | **DELETE** /v2/orders/{order_id}/items/{order_item_id} | Delete an Order Item
*OrdersApi* | [**detachFileFromOrder**](docs/Api/OrdersApi.md#detachfilefromorder) | **POST** /v2/orders/{order_id}:detachFile | Detach a File from an Order Invoice
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /v2/orders/{order_id} | Retrieve an Order
*OrdersApi* | [**listOrderPayments**](docs/Api/OrdersApi.md#listorderpayments) | **GET** /v2/orders/{order_id}/payments | Retrieve Order Payments
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /v2/orders | List orders
*OrdersApi* | [**retrieveOrderCustomFieldModel**](docs/Api/OrdersApi.md#retrieveordercustomfieldmodel) | **GET** /v2/orders/model | Retrieve Order Custom Field Model
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PATCH** /v2/orders/{order_id} | Update an Order
*OrdersApi* | [**updateOrderCustomField**](docs/Api/OrdersApi.md#updateordercustomfield) | **PATCH** /v2/orders/model/customFields/{custom_field_id} | Update an Order Custom Field
*OrdersApi* | [**updateOrderItem**](docs/Api/OrdersApi.md#updateorderitem) | **PATCH** /v2/orders/{order_id}/items/{order_item_id} | Update an Order Item
*PaymentMethodConfigsApi* | [**createPaymentMethodConfig**](docs/Api/PaymentMethodConfigsApi.md#createpaymentmethodconfig) | **POST** /v2/paymentMethodConfigs | Create Payment Method Configuration
*PaymentMethodsApi* | [**deactivatePaymentMethod**](docs/Api/PaymentMethodsApi.md#deactivatepaymentmethod) | **POST** /v2/contacts/{contact_id}/paymentMethods/{payment_method_id}:deactivate | Deactivate a Payment Method
*PaymentMethodsApi* | [**deletePaymentMethod**](docs/Api/PaymentMethodsApi.md#deletepaymentmethod) | **DELETE** /v2/contacts/{contact_id}/paymentMethods/{payment_method_id} | Delete a Payment Method
*PaymentMethodsApi* | [**listPaymentMethods**](docs/Api/PaymentMethodsApi.md#listpaymentmethods) | **GET** /v2/contacts/{contact_id}/paymentMethods | List of Payment Methods
*ProductCategoriesApi* | [**assignProductsToCategory**](docs/Api/ProductCategoriesApi.md#assignproductstocategory) | **POST** /v2/productCategories/{category_id}:assignProducts | Assign Products to a Product Category
*ProductCategoriesApi* | [**createImageFile**](docs/Api/ProductCategoriesApi.md#createimagefile) | **POST** /v2/productCategories/{category_id}/images | Create the product category image file
*ProductCategoriesApi* | [**createProductCategory**](docs/Api/ProductCategoriesApi.md#createproductcategory) | **POST** /v2/productCategories | Create a Product Category
*ProductCategoriesApi* | [**deleteImageFile**](docs/Api/ProductCategoriesApi.md#deleteimagefile) | **DELETE** /v2/productCategories/{category_id}/images | Delete the image from a product category
*ProductCategoriesApi* | [**deleteProductCategory**](docs/Api/ProductCategoriesApi.md#deleteproductcategory) | **DELETE** /v2/productCategories/{category_id} | Delete a Product Category
*ProductCategoriesApi* | [**getProductCategory**](docs/Api/ProductCategoriesApi.md#getproductcategory) | **GET** /v2/productCategories/{category_id} | Get a Product Category
*ProductCategoriesApi* | [**listProductCategories**](docs/Api/ProductCategoriesApi.md#listproductcategories) | **GET** /v2/productCategories | List all Product Categories
*ProductCategoriesApi* | [**updateProductCategory**](docs/Api/ProductCategoriesApi.md#updateproductcategory) | **PATCH** /v2/productCategories/{category_id} | Update a Product Category
*ProductDiscountsApi* | [**createProductDiscount**](docs/Api/ProductDiscountsApi.md#createproductdiscount) | **POST** /v2/discounts/products | Create a Product Discount
*ProductDiscountsApi* | [**deleteProductDiscount**](docs/Api/ProductDiscountsApi.md#deleteproductdiscount) | **DELETE** /v2/discounts/products/{discount_id} | Delete a Product Discount
*ProductDiscountsApi* | [**getProductDiscount**](docs/Api/ProductDiscountsApi.md#getproductdiscount) | **GET** /v2/discounts/products/{discount_id} | Retrieve a Product Discount
*ProductDiscountsApi* | [**listProductDiscounts**](docs/Api/ProductDiscountsApi.md#listproductdiscounts) | **GET** /v2/discounts/products | List all Product Discounts
*ProductDiscountsApi* | [**updateProductDiscount**](docs/Api/ProductDiscountsApi.md#updateproductdiscount) | **PATCH** /v2/discounts/products/{discount_id} | Update a Product Discount
*ProductInterestBundlesApi* | [**addProductInterest**](docs/Api/ProductInterestBundlesApi.md#addproductinterest) | **POST** /v2/productInterestBundles/{id}/interests | Create a Product Interest in an existing Bundle
*ProductInterestBundlesApi* | [**createProductInterestBundle**](docs/Api/ProductInterestBundlesApi.md#createproductinterestbundle) | **POST** /v2/productInterestBundles | Create a Product Interest Bundle
*ProductInterestBundlesApi* | [**deleteProductInterestBundle**](docs/Api/ProductInterestBundlesApi.md#deleteproductinterestbundle) | **DELETE** /v2/productInterestBundles/{id} | Delete a Product Interest Bundle
*ProductInterestBundlesApi* | [**getProductInterestBundle**](docs/Api/ProductInterestBundlesApi.md#getproductinterestbundle) | **GET** /v2/productInterestBundles/{id} | Get a Product Interest Bundle
*ProductInterestBundlesApi* | [**listProductInterestBundles**](docs/Api/ProductInterestBundlesApi.md#listproductinterestbundles) | **GET** /v2/productInterestBundles | List Product Interest Bundles
*ProductInterestBundlesApi* | [**removeProductInterest**](docs/Api/ProductInterestBundlesApi.md#removeproductinterest) | **DELETE** /v2/productInterestBundles/{id}/interests/{interest_id} | Delete a Product Interest from an existing Bundle
*ProductInterestBundlesApi* | [**updateProductInterest**](docs/Api/ProductInterestBundlesApi.md#updateproductinterest) | **PATCH** /v2/productInterestBundles/{id}/interests/{interest_id} | Update a Product Interest in an existing Bundle
*ProductInterestBundlesApi* | [**updateProductInterestBundle**](docs/Api/ProductInterestBundlesApi.md#updateproductinterestbundle) | **PATCH** /v2/productInterestBundles/{id} | Update a Product Interest Bundle
*ProductsApi* | [**adjustInventory**](docs/Api/ProductsApi.md#adjustinventory) | **POST** /v2/products/{product_id}:adjustInventory | Adjust Inventory of a Product
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /v2/products | Create a Product
*ProductsApi* | [**createProductImage**](docs/Api/ProductsApi.md#createproductimage) | **POST** /v2/products/{product_id}/images | Create the Product Image
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /v2/products/{product_id} | Delete a Product
*ProductsApi* | [**deleteProductImage**](docs/Api/ProductsApi.md#deleteproductimage) | **DELETE** /v2/products/{product_id}/images | Delete the Product Image
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /v2/products/{product_id} | Get a Product
*ProductsApi* | [**listProducts**](docs/Api/ProductsApi.md#listproducts) | **GET** /v2/products | List Products
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PATCH** /v2/products/{product_id} | Update a Product
*ReferralApi* | [**createReferral**](docs/Api/ReferralApi.md#createreferral) | **POST** /v2/referrals | Create a Referral
*ReportingApi* | [**listReports**](docs/Api/ReportingApi.md#listreports) | **GET** /v2/reporting/reports | List Reports
*ReportingApi* | [**retrieveReport**](docs/Api/ReportingApi.md#retrievereport) | **GET** /v2/reporting/reports/{report_id} | Retrieve Report
*ReportingApi* | [**runReport**](docs/Api/ReportingApi.md#runreport) | **POST** /v2/reporting/reports/{report_id}:run | Run a Report
*SalesApi* | [**setMerchantGatewayAsDefault**](docs/Api/SalesApi.md#setmerchantgatewayasdefault) | **POST** /v2/sales/merchants/{id}:setDefault | Set default Merchant Account
*SettingsApi* | [**getApplicationConfigurations**](docs/Api/SettingsApi.md#getapplicationconfigurations) | **GET** /v2/settings/applications:getConfiguration | Get Application Configuration
*SettingsApi* | [**getContactOptionTypes**](docs/Api/SettingsApi.md#getcontactoptiontypes) | **GET** /v2/settings/contactOptionTypes | Get Contact Option types
*SettingsApi* | [**isApplicationEnabled**](docs/Api/SettingsApi.md#isapplicationenabled) | **GET** /v2/settings/applications:isEnabled | Get Application Status
*ShippingApi* | [**listShippingMethods**](docs/Api/ShippingApi.md#listshippingmethods) | **GET** /v2/shipping | List Shipping methods
*ShippingDiscountsApi* | [**createShippingDiscount**](docs/Api/ShippingDiscountsApi.md#createshippingdiscount) | **POST** /v2/discounts/shipping | Create a Shipping Discount
*ShippingDiscountsApi* | [**deleteShippingDiscount**](docs/Api/ShippingDiscountsApi.md#deleteshippingdiscount) | **DELETE** /v2/discounts/shipping/{discount_id} | Delete a Shipping Discount
*ShippingDiscountsApi* | [**getShippingDiscount**](docs/Api/ShippingDiscountsApi.md#getshippingdiscount) | **GET** /v2/discounts/shipping/{discount_id} | Retrieve a Shipping Discount
*ShippingDiscountsApi* | [**listShippingDiscounts**](docs/Api/ShippingDiscountsApi.md#listshippingdiscounts) | **GET** /v2/discounts/shipping | List all Shipping Discounts
*ShippingDiscountsApi* | [**updateShippingDiscount**](docs/Api/ShippingDiscountsApi.md#updateshippingdiscount) | **PATCH** /v2/discounts/shipping/{discount_id} | Update a Shipping Discount
*SubscriptionPlansApi* | [**createSubscriptionPlans**](docs/Api/SubscriptionPlansApi.md#createsubscriptionplans) | **POST** /v2/products/{product_id}/subscriptions | Create Subscription Plan
*SubscriptionPlansApi* | [**deleteSubscriptionPlan**](docs/Api/SubscriptionPlansApi.md#deletesubscriptionplan) | **DELETE** /v2/products/{product_id}/subscriptions/{subscription_plan_id} | Delete Subscription Plan
*SubscriptionPlansApi* | [**fetchSubscriptionPlan**](docs/Api/SubscriptionPlansApi.md#fetchsubscriptionplan) | **GET** /v2/products/{product_id}/subscriptions/{subscription_plan_id} | Get Subscription Plan
*SubscriptionPlansApi* | [**listSubscriptionPlans**](docs/Api/SubscriptionPlansApi.md#listsubscriptionplans) | **GET** /v2/products/{product_id}/subscriptions | List Subscription Plans
*SubscriptionPlansApi* | [**updateSubscriptionPlan**](docs/Api/SubscriptionPlansApi.md#updatesubscriptionplan) | **PATCH** /v2/products/{product_id}/subscriptions/{subscription_plan_id} | Update Subscription Plan
*SubscriptionsApi* | [**cancelSubscription**](docs/Api/SubscriptionsApi.md#cancelsubscription) | **POST** /v2/subscriptions/{subscription_id}:deactivate | Cancel Subscription
*SubscriptionsApi* | [**createSubscription**](docs/Api/SubscriptionsApi.md#createsubscription) | **POST** /v2/subscriptions | Create Subscription
*SubscriptionsApi* | [**createSubscriptionCustomField**](docs/Api/SubscriptionsApi.md#createsubscriptioncustomfield) | **POST** /v2/subscriptions/model/customFields | Create a Subscription Custom Field
*SubscriptionsApi* | [**deleteSubscriptionCustomField**](docs/Api/SubscriptionsApi.md#deletesubscriptioncustomfield) | **DELETE** /v2/subscriptions/model/customFields/{custom_field_id} | Delete a Subscription Custom Field
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /v2/subscriptions/{subscription_id} | Retrieve a Subscription
*SubscriptionsApi* | [**listSubscriptions**](docs/Api/SubscriptionsApi.md#listsubscriptions) | **GET** /v2/subscriptions | List Subscriptions
*SubscriptionsApi* | [**retrieveSubscriptionCustomFieldModel**](docs/Api/SubscriptionsApi.md#retrievesubscriptioncustomfieldmodel) | **GET** /v2/subscriptions/model | Retrieve Subscription Custom Field Model
*SubscriptionsApi* | [**updateSubscription**](docs/Api/SubscriptionsApi.md#updatesubscription) | **PATCH** /v2/subscriptions/{subscription_id} | Update a Subscription
*SubscriptionsApi* | [**updateSubscriptionCustomField**](docs/Api/SubscriptionsApi.md#updatesubscriptioncustomfield) | **PATCH** /v2/subscriptions/model/customFields/{custom_field_id} | Update a Subscription Custom Field
*TagsApi* | [**applyTags**](docs/Api/TagsApi.md#applytags) | **POST** /v2/tags/{tag_id}/contacts:applyTags | Apply Tag
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /v2/tags | Create Tag
*TagsApi* | [**createTagCategory**](docs/Api/TagsApi.md#createtagcategory) | **POST** /v2/tags/categories | Create Tag Category
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /v2/tags/{tag_id} | Delete Tag
*TagsApi* | [**deleteTagCategory**](docs/Api/TagsApi.md#deletetagcategory) | **DELETE** /v2/tags/categories/{tag_category_id} | Delete Tag Category
*TagsApi* | [**getCategory**](docs/Api/TagsApi.md#getcategory) | **GET** /v2/tags/categories/{tag_category_id} | Retrieve a Tag Category
*TagsApi* | [**getTag**](docs/Api/TagsApi.md#gettag) | **GET** /v2/tags/{tag_id} | Retrieve a Tag
*TagsApi* | [**listCompaniesForTagId**](docs/Api/TagsApi.md#listcompaniesfortagid) | **GET** /v2/tags/{tag_id}/companies | List Tagged Companies
*TagsApi* | [**listContactsWithTagId**](docs/Api/TagsApi.md#listcontactswithtagid) | **GET** /v2/tags/{tag_id}/contacts | List Tagged Contacts
*TagsApi* | [**listTagCategories**](docs/Api/TagsApi.md#listtagcategories) | **GET** /v2/tags/categories | List Tag Categories
*TagsApi* | [**listTags**](docs/Api/TagsApi.md#listtags) | **GET** /v2/tags | List Tags
*TagsApi* | [**removeTags**](docs/Api/TagsApi.md#removetags) | **POST** /v2/tags/{tag_id}/contacts:removeTags | Remove Tags
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PATCH** /v2/tags/{tag_id} | Update a Tag
*TagsApi* | [**updateTagCategory**](docs/Api/TagsApi.md#updatetagcategory) | **PATCH** /v2/tags/categories/{tag_category_id} | Update a Tag Category
*TaskApi* | [**createTask**](docs/Api/TaskApi.md#createtask) | **POST** /v2/tasks | Create a Task
*TaskApi* | [**createTaskCustomField**](docs/Api/TaskApi.md#createtaskcustomfield) | **POST** /v2/tasks/model/customFields | Create a Custom Field
*TaskApi* | [**deleteTask**](docs/Api/TaskApi.md#deletetask) | **DELETE** /v2/tasks/{task_id} | Delete a Task
*TaskApi* | [**deleteTaskCustomField**](docs/Api/TaskApi.md#deletetaskcustomfield) | **DELETE** /v2/tasks/model/customFields/{custom_field_id} | Delete a Custom Field
*TaskApi* | [**getTask**](docs/Api/TaskApi.md#gettask) | **GET** /v2/tasks/{task_id} | Retrieve a Task
*TaskApi* | [**listTasks**](docs/Api/TaskApi.md#listtasks) | **GET** /v2/tasks | List Tasks
*TaskApi* | [**retrieveTaskModel**](docs/Api/TaskApi.md#retrievetaskmodel) | **GET** /v2/tasks/model | Retrieve Task Model
*TaskApi* | [**updateTask**](docs/Api/TaskApi.md#updatetask) | **PATCH** /v2/tasks/{task_id} | Update a Task
*TaskApi* | [**updateTaskCustomField**](docs/Api/TaskApi.md#updatetaskcustomfield) | **PATCH** /v2/tasks/model/customFields/{custom_field_id} | Update a Task&#39;s Custom Field
*UsersApi* | [**getUserById**](docs/Api/UsersApi.md#getuserbyid) | **GET** /v2/users/{user_id} | Get User
*UsersApi* | [**getUserInfo**](docs/Api/UsersApi.md#getuserinfo) | **GET** /v2/oauth/connect/userinfo | Retrieve User Info
*UsersApi* | [**getUserSignature**](docs/Api/UsersApi.md#getusersignature) | **GET** /v2/users/{user_id}/signature | Get User email signature
*UsersApi* | [**listPaginatedUsers**](docs/Api/UsersApi.md#listpaginatedusers) | **GET** /v2/users | List Users
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PATCH** /v2/users/{user_id} | Update User
*WebformsApi* | [**getHtml**](docs/Api/WebformsApi.md#gethtml) | **GET** /v2/webforms/{webform_id}:data | Get Webform HTML
*WebformsApi* | [**listWebforms**](docs/Api/WebformsApi.md#listwebforms) | **GET** /v2/webforms | List Webforms with filter

## Models

- [AddContactsToSequenceRequest](docs/Model/AddContactsToSequenceRequest.md)
- [AddContactsToSequenceResponse](docs/Model/AddContactsToSequenceResponse.md)
- [AddProductInterestRequest](docs/Model/AddProductInterestRequest.md)
- [AddToAutomationSequenceRequest](docs/Model/AddToAutomationSequenceRequest.md)
- [AddToAutomationSequenceResponse](docs/Model/AddToAutomationSequenceResponse.md)
- [Address](docs/Model/Address.md)
- [AddressInformation](docs/Model/AddressInformation.md)
- [AddressRequest](docs/Model/AddressRequest.md)
- [AffiliateAddToProgramRequest](docs/Model/AffiliateAddToProgramRequest.md)
- [AffiliateCommission](docs/Model/AffiliateCommission.md)
- [AffiliateCommissionEarned](docs/Model/AffiliateCommissionEarned.md)
- [AffiliateCommissionProgramResponse](docs/Model/AffiliateCommissionProgramResponse.md)
- [AffiliateLink](docs/Model/AffiliateLink.md)
- [AffiliateProgramV2](docs/Model/AffiliateProgramV2.md)
- [AffiliateRemoveFromProgramRequest](docs/Model/AffiliateRemoveFromProgramRequest.md)
- [AffiliateSummaryRecord](docs/Model/AffiliateSummaryRecord.md)
- [ApplicationCompany](docs/Model/ApplicationCompany.md)
- [ApplicationConfigurationModuleAffiliate](docs/Model/ApplicationConfigurationModuleAffiliate.md)
- [ApplicationConfigurationModuleAffiliateCommission](docs/Model/ApplicationConfigurationModuleAffiliateCommission.md)
- [ApplicationConfigurationModuleApplication](docs/Model/ApplicationConfigurationModuleApplication.md)
- [ApplicationConfigurationModuleAppointment](docs/Model/ApplicationConfigurationModuleAppointment.md)
- [ApplicationConfigurationModuleContact](docs/Model/ApplicationConfigurationModuleContact.md)
- [ApplicationConfigurationModuleContactAddressLabels](docs/Model/ApplicationConfigurationModuleContactAddressLabels.md)
- [ApplicationConfigurationModuleEcommerce](docs/Model/ApplicationConfigurationModuleEcommerce.md)
- [ApplicationConfigurationModuleEmail](docs/Model/ApplicationConfigurationModuleEmail.md)
- [ApplicationConfigurationModuleForms](docs/Model/ApplicationConfigurationModuleForms.md)
- [ApplicationConfigurationModuleFulfillment](docs/Model/ApplicationConfigurationModuleFulfillment.md)
- [ApplicationConfigurationModuleInvoice](docs/Model/ApplicationConfigurationModuleInvoice.md)
- [ApplicationConfigurationModuleNote](docs/Model/ApplicationConfigurationModuleNote.md)
- [ApplicationConfigurationModuleOpportunity](docs/Model/ApplicationConfigurationModuleOpportunity.md)
- [ApplicationConfigurationModuleOpportunityStates](docs/Model/ApplicationConfigurationModuleOpportunityStates.md)
- [ApplicationConfigurationModuleOpportunityStatesActive](docs/Model/ApplicationConfigurationModuleOpportunityStatesActive.md)
- [ApplicationConfigurationModuleOpportunityStatesLoss](docs/Model/ApplicationConfigurationModuleOpportunityStatesLoss.md)
- [ApplicationConfigurationModuleOpportunityStatesWin](docs/Model/ApplicationConfigurationModuleOpportunityStatesWin.md)
- [ApplicationConfigurationModuleTask](docs/Model/ApplicationConfigurationModuleTask.md)
- [ApplicationConfigurationModuleTemplate](docs/Model/ApplicationConfigurationModuleTemplate.md)
- [ApplicationFeaturesEnabled](docs/Model/ApplicationFeaturesEnabled.md)
- [ApplyRemoveTagRequest](docs/Model/ApplyRemoveTagRequest.md)
- [ApplyTagsResponse](docs/Model/ApplyTagsResponse.md)
- [AssignAutomationCategoryRequest](docs/Model/AssignAutomationCategoryRequest.md)
- [AssignProductsRequest](docs/Model/AssignProductsRequest.md)
- [Automation](docs/Model/Automation.md)
- [AutomationCategory](docs/Model/AutomationCategory.md)
- [AutomationLockStatus](docs/Model/AutomationLockStatus.md)
- [BasicCompany](docs/Model/BasicCompany.md)
- [BasicContact](docs/Model/BasicContact.md)
- [BasicUser](docs/Model/BasicUser.md)
- [BusinessProfileAddressRequest](docs/Model/BusinessProfileAddressRequest.md)
- [BusinessProfileAddressResponse](docs/Model/BusinessProfileAddressResponse.md)
- [Campaign](docs/Model/Campaign.md)
- [CancelSubscriptionRequest](docs/Model/CancelSubscriptionRequest.md)
- [CardInfo](docs/Model/CardInfo.md)
- [CategoryDiscount](docs/Model/CategoryDiscount.md)
- [CategoryReference](docs/Model/CategoryReference.md)
- [CheckListItemDetails](docs/Model/CheckListItemDetails.md)
- [ChecklistItem](docs/Model/ChecklistItem.md)
- [Company](docs/Model/Company.md)
- [Contact](docs/Model/Contact.md)
- [ContactLink](docs/Model/ContactLink.md)
- [ContactLinkType](docs/Model/ContactLinkType.md)
- [ContactUtmResponse](docs/Model/ContactUtmResponse.md)
- [Country](docs/Model/Country.md)
- [CountryCodes](docs/Model/CountryCodes.md)
- [CreateAffiliateRequest](docs/Model/CreateAffiliateRequest.md)
- [CreateAutomationCategoryRequest](docs/Model/CreateAutomationCategoryRequest.md)
- [CreateCategoryDiscountRequest](docs/Model/CreateCategoryDiscountRequest.md)
- [CreateCommissionProgramRequest](docs/Model/CreateCommissionProgramRequest.md)
- [CreateCompanyRequest](docs/Model/CreateCompanyRequest.md)
- [CreateContactLinkTypeRequest](docs/Model/CreateContactLinkTypeRequest.md)
- [CreateContactUtmPropertiesRequest](docs/Model/CreateContactUtmPropertiesRequest.md)
- [CreateCustomFieldOptionRequest](docs/Model/CreateCustomFieldOptionRequest.md)
- [CreateCustomFieldRequest](docs/Model/CreateCustomFieldRequest.md)
- [CreateCustomFieldResponse](docs/Model/CreateCustomFieldResponse.md)
- [CreateDefaultCommissionProgramRequest](docs/Model/CreateDefaultCommissionProgramRequest.md)
- [CreateEmailSentRequest](docs/Model/CreateEmailSentRequest.md)
- [CreateEmailsSentRequest](docs/Model/CreateEmailsSentRequest.md)
- [CreateFreeTrialDiscountRequest](docs/Model/CreateFreeTrialDiscountRequest.md)
- [CreateLeadSourceExpenseRequest](docs/Model/CreateLeadSourceExpenseRequest.md)
- [CreateLeadSourceRecurringExpenseRequest](docs/Model/CreateLeadSourceRecurringExpenseRequest.md)
- [CreateLeadSourceRequest](docs/Model/CreateLeadSourceRequest.md)
- [CreateNoteRequest](docs/Model/CreateNoteRequest.md)
- [CreateOpportunityRequest](docs/Model/CreateOpportunityRequest.md)
- [CreateOpportunityStageChecklistItem](docs/Model/CreateOpportunityStageChecklistItem.md)
- [CreateOpportunityStageRequest](docs/Model/CreateOpportunityStageRequest.md)
- [CreateOrUpdateAffiliateLinkRequest](docs/Model/CreateOrUpdateAffiliateLinkRequest.md)
- [CreateOrderItemRequest](docs/Model/CreateOrderItemRequest.md)
- [CreateOrderTotalDiscountRequest](docs/Model/CreateOrderTotalDiscountRequest.md)
- [CreatePaymentMethodConfigRequest](docs/Model/CreatePaymentMethodConfigRequest.md)
- [CreatePaymentRequest](docs/Model/CreatePaymentRequest.md)
- [CreateProductCategoryRequest](docs/Model/CreateProductCategoryRequest.md)
- [CreateProductCommissionProgramRequest](docs/Model/CreateProductCommissionProgramRequest.md)
- [CreateProductDiscountRequest](docs/Model/CreateProductDiscountRequest.md)
- [CreateProductInterestBundleRequest](docs/Model/CreateProductInterestBundleRequest.md)
- [CreateProductRequest](docs/Model/CreateProductRequest.md)
- [CreateReferralRequest](docs/Model/CreateReferralRequest.md)
- [CreateShippingDiscountRequest](docs/Model/CreateShippingDiscountRequest.md)
- [CreateSubscriptionCommissionProgramRequest](docs/Model/CreateSubscriptionCommissionProgramRequest.md)
- [CreateSubscriptionPlanRequest](docs/Model/CreateSubscriptionPlanRequest.md)
- [CreateSubscriptionRequest](docs/Model/CreateSubscriptionRequest.md)
- [CreateTaskRequest](docs/Model/CreateTaskRequest.md)
- [CreateUpdateContactRequest](docs/Model/CreateUpdateContactRequest.md)
- [CreateUpdateLeadSourceCategoryRequest](docs/Model/CreateUpdateLeadSourceCategoryRequest.md)
- [CreateUpdateTagCategoryRequest](docs/Model/CreateUpdateTagCategoryRequest.md)
- [CreateUpdateTagRequest](docs/Model/CreateUpdateTagRequest.md)
- [CreateUpdateTaskRequest](docs/Model/CreateUpdateTaskRequest.md)
- [CurrencyValue](docs/Model/CurrencyValue.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldMetaData](docs/Model/CustomFieldMetaData.md)
- [CustomFieldOption](docs/Model/CustomFieldOption.md)
- [CustomFieldValue](docs/Model/CustomFieldValue.md)
- [DefaultCommission](docs/Model/DefaultCommission.md)
- [DeleteEmailsRequest](docs/Model/DeleteEmailsRequest.md)
- [DeleteEmailsResponse](docs/Model/DeleteEmailsResponse.md)
- [DeleteProgramCommissionRequest](docs/Model/DeleteProgramCommissionRequest.md)
- [DeleteSubscriptionPlanCommissionRequest](docs/Model/DeleteSubscriptionPlanCommissionRequest.md)
- [Discount](docs/Model/Discount.md)
- [DiscountCriteria](docs/Model/DiscountCriteria.md)
- [EmailAddress](docs/Model/EmailAddress.md)
- [EmailAddressRequest](docs/Model/EmailAddressRequest.md)
- [EmailAddressStatus](docs/Model/EmailAddressStatus.md)
- [EmailSendRequest](docs/Model/EmailSendRequest.md)
- [EmailSendRequestAttachment](docs/Model/EmailSendRequestAttachment.md)
- [EmailSendTemplateRequest](docs/Model/EmailSendTemplateRequest.md)
- [EmailSent](docs/Model/EmailSent.md)
- [EmailSentCreateError](docs/Model/EmailSentCreateError.md)
- [EmailSentWithContent](docs/Model/EmailSentWithContent.md)
- [EmailTemplate](docs/Model/EmailTemplate.md)
- [EmailsSentList](docs/Model/EmailsSentList.md)
- [Error](docs/Model/Error.md)
- [ErrorDetails](docs/Model/ErrorDetails.md)
- [FaxNumber](docs/Model/FaxNumber.md)
- [File](docs/Model/File.md)
- [FileMetadata](docs/Model/FileMetadata.md)
- [FileOperationRequest](docs/Model/FileOperationRequest.md)
- [FreeTrialDiscount](docs/Model/FreeTrialDiscount.md)
- [GetApplicationEnabledStatusResponse](docs/Model/GetApplicationEnabledStatusResponse.md)
- [GetBusinessProfileResponse](docs/Model/GetBusinessProfileResponse.md)
- [GetContactOptionTypesResponse](docs/Model/GetContactOptionTypesResponse.md)
- [GetNoteResponse](docs/Model/GetNoteResponse.md)
- [GetSettingsResponse](docs/Model/GetSettingsResponse.md)
- [GetTagCategoryResponse](docs/Model/GetTagCategoryResponse.md)
- [GetUserInfoResponse](docs/Model/GetUserInfoResponse.md)
- [Goal](docs/Model/Goal.md)
- [HistoricalCounts](docs/Model/HistoricalCounts.md)
- [InvoiceFile](docs/Model/InvoiceFile.md)
- [InvoiceOrderPayment](docs/Model/InvoiceOrderPayment.md)
- [Item](docs/Model/Item.md)
- [LeadScore](docs/Model/LeadScore.md)
- [LeadSource](docs/Model/LeadSource.md)
- [LeadSourceCategory](docs/Model/LeadSourceCategory.md)
- [LeadSourceExpense](docs/Model/LeadSourceExpense.md)
- [LeadSourceRecurringExpense](docs/Model/LeadSourceRecurringExpense.md)
- [LeadSourceRecurringExpenseUpdateRequest](docs/Model/LeadSourceRecurringExpenseUpdateRequest.md)
- [Link](docs/Model/Link.md)
- [LinkContactsRequest](docs/Model/LinkContactsRequest.md)
- [ListAffiliateCommissionProgramsResponse](docs/Model/ListAffiliateCommissionProgramsResponse.md)
- [ListAffiliateCommissionsResponse](docs/Model/ListAffiliateCommissionsResponse.md)
- [ListAffiliateLinksResponse](docs/Model/ListAffiliateLinksResponse.md)
- [ListAffiliatePaymentsResponse](docs/Model/ListAffiliatePaymentsResponse.md)
- [ListAffiliateSummariesResponse](docs/Model/ListAffiliateSummariesResponse.md)
- [ListAffiliatesResponse](docs/Model/ListAffiliatesResponse.md)
- [ListAutomationCategoryResponse](docs/Model/ListAutomationCategoryResponse.md)
- [ListAutomationIdsResponse](docs/Model/ListAutomationIdsResponse.md)
- [ListAutomationResponse](docs/Model/ListAutomationResponse.md)
- [ListCampaignGoalsResponse](docs/Model/ListCampaignGoalsResponse.md)
- [ListCampaignSequenceResponse](docs/Model/ListCampaignSequenceResponse.md)
- [ListCampaignsResponse](docs/Model/ListCampaignsResponse.md)
- [ListCategoryDiscountsResponse](docs/Model/ListCategoryDiscountsResponse.md)
- [ListCompaniesResponse](docs/Model/ListCompaniesResponse.md)
- [ListContactLinkTypesResponse](docs/Model/ListContactLinkTypesResponse.md)
- [ListContactLinksResponse](docs/Model/ListContactLinksResponse.md)
- [ListContactsResponse](docs/Model/ListContactsResponse.md)
- [ListCountriesResponse](docs/Model/ListCountriesResponse.md)
- [ListEmailsSentResponse](docs/Model/ListEmailsSentResponse.md)
- [ListFilesResponse](docs/Model/ListFilesResponse.md)
- [ListFreeTrialDiscountsResponse](docs/Model/ListFreeTrialDiscountsResponse.md)
- [ListLeadSourceCategoriesResponse](docs/Model/ListLeadSourceCategoriesResponse.md)
- [ListLeadSourceExpensesResponse](docs/Model/ListLeadSourceExpensesResponse.md)
- [ListLeadSourceRecurringExpensesResponse](docs/Model/ListLeadSourceRecurringExpensesResponse.md)
- [ListLeadSourcesResponse](docs/Model/ListLeadSourcesResponse.md)
- [ListMerchantAccountResponse](docs/Model/ListMerchantAccountResponse.md)
- [ListMerchantsResponse](docs/Model/ListMerchantsResponse.md)
- [ListNoteTemplateResponse](docs/Model/ListNoteTemplateResponse.md)
- [ListNotesResponse](docs/Model/ListNotesResponse.md)
- [ListOpportunitiesResponse](docs/Model/ListOpportunitiesResponse.md)
- [ListOpportunityStagesResponse](docs/Model/ListOpportunityStagesResponse.md)
- [ListOrderPaymentsResponse](docs/Model/ListOrderPaymentsResponse.md)
- [ListOrderTotalDiscountsResponse](docs/Model/ListOrderTotalDiscountsResponse.md)
- [ListOrders](docs/Model/ListOrders.md)
- [ListPaymentMethodsResponse](docs/Model/ListPaymentMethodsResponse.md)
- [ListProductCategoriesResponse](docs/Model/ListProductCategoriesResponse.md)
- [ListProductDiscountsResponse](docs/Model/ListProductDiscountsResponse.md)
- [ListProductInterestBundleResponse](docs/Model/ListProductInterestBundleResponse.md)
- [ListProductsResponse](docs/Model/ListProductsResponse.md)
- [ListProvincesResponse](docs/Model/ListProvincesResponse.md)
- [ListReportsResponse](docs/Model/ListReportsResponse.md)
- [ListRestShippingMethodsResponse](docs/Model/ListRestShippingMethodsResponse.md)
- [ListShippingDiscountsResponse](docs/Model/ListShippingDiscountsResponse.md)
- [ListSubscriptionPlansResponse](docs/Model/ListSubscriptionPlansResponse.md)
- [ListSubscriptionsResponse](docs/Model/ListSubscriptionsResponse.md)
- [ListTagCategoriesResponse](docs/Model/ListTagCategoriesResponse.md)
- [ListTaggedCompaniesResponse](docs/Model/ListTaggedCompaniesResponse.md)
- [ListTaggedContactsResponse](docs/Model/ListTaggedContactsResponse.md)
- [ListTagsResponse](docs/Model/ListTagsResponse.md)
- [ListTasksResponse](docs/Model/ListTasksResponse.md)
- [ListUserGroupsResponse](docs/Model/ListUserGroupsResponse.md)
- [ListUsersPaginatedResponse](docs/Model/ListUsersPaginatedResponse.md)
- [ListWebformsResponse](docs/Model/ListWebformsResponse.md)
- [Note](docs/Model/Note.md)
- [NoteTemplate](docs/Model/NoteTemplate.md)
- [ObjectModel](docs/Model/ObjectModel.md)
- [OpportunityContact](docs/Model/OpportunityContact.md)
- [OpportunityStage](docs/Model/OpportunityStage.md)
- [Order](docs/Model/Order.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemProduct](docs/Model/OrderItemProduct.md)
- [OrderTotalDiscount](docs/Model/OrderTotalDiscount.md)
- [Origin](docs/Model/Origin.md)
- [OriginRequest](docs/Model/OriginRequest.md)
- [PatchAutomationCategoryRequest](docs/Model/PatchAutomationCategoryRequest.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodConfig](docs/Model/PaymentMethodConfig.md)
- [PaymentPlan](docs/Model/PaymentPlan.md)
- [PaymentResult](docs/Model/PaymentResult.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [ProductCategory](docs/Model/ProductCategory.md)
- [ProductCommission](docs/Model/ProductCommission.md)
- [ProductCommissionProgram](docs/Model/ProductCommissionProgram.md)
- [ProductDiscount](docs/Model/ProductDiscount.md)
- [ProductFixedOption](docs/Model/ProductFixedOption.md)
- [ProductInterest](docs/Model/ProductInterest.md)
- [ProductInterestBundle](docs/Model/ProductInterestBundle.md)
- [ProductInventory](docs/Model/ProductInventory.md)
- [ProductOptions](docs/Model/ProductOptions.md)
- [ProductVariableSetting](docs/Model/ProductVariableSetting.md)
- [Province](docs/Model/Province.md)
- [Referral](docs/Model/Referral.md)
- [RemoveContactsFromSequenceRequest](docs/Model/RemoveContactsFromSequenceRequest.md)
- [RemoveContactsFromSequenceResponse](docs/Model/RemoveContactsFromSequenceResponse.md)
- [Report](docs/Model/Report.md)
- [ReportEntryRecord](docs/Model/ReportEntryRecord.md)
- [ReportEntryValue](docs/Model/ReportEntryValue.md)
- [ReportExecutionResult](docs/Model/ReportExecutionResult.md)
- [Resource](docs/Model/Resource.md)
- [RestAffiliate](docs/Model/RestAffiliate.md)
- [RestAffiliatePayment](docs/Model/RestAffiliatePayment.md)
- [RestApplyCommissionRequest](docs/Model/RestApplyCommissionRequest.md)
- [RestCreateOrderRequest](docs/Model/RestCreateOrderRequest.md)
- [RestEmailAddress](docs/Model/RestEmailAddress.md)
- [RestOpportunityStage](docs/Model/RestOpportunityStage.md)
- [RestV2Opportunity](docs/Model/RestV2Opportunity.md)
- [RestV2Product](docs/Model/RestV2Product.md)
- [RestV2User](docs/Model/RestV2User.md)
- [Sequence](docs/Model/Sequence.md)
- [SequencePath](docs/Model/SequencePath.md)
- [SetDefaultCommissionProgramResponse](docs/Model/SetDefaultCommissionProgramResponse.md)
- [ShippingDiscount](docs/Model/ShippingDiscount.md)
- [ShippingInformation](docs/Model/ShippingInformation.md)
- [ShippingMethod](docs/Model/ShippingMethod.md)
- [SocialAccount](docs/Model/SocialAccount.md)
- [StackTraceElement](docs/Model/StackTraceElement.md)
- [StageDetails](docs/Model/StageDetails.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionCommission](docs/Model/SubscriptionCommission.md)
- [SubscriptionCommissionProgram](docs/Model/SubscriptionCommissionProgram.md)
- [SubscriptionPlan](docs/Model/SubscriptionPlan.md)
- [Tag](docs/Model/Tag.md)
- [TagCategory](docs/Model/TagCategory.md)
- [TaggedCompany](docs/Model/TaggedCompany.md)
- [Task](docs/Model/Task.md)
- [Throwable](docs/Model/Throwable.md)
- [URI](docs/Model/URI.md)
- [URL](docs/Model/URL.md)
- [UpdateAffiliateRequest](docs/Model/UpdateAffiliateRequest.md)
- [UpdateBusinessProfileRequest](docs/Model/UpdateBusinessProfileRequest.md)
- [UpdateCategoryDiscountRequest](docs/Model/UpdateCategoryDiscountRequest.md)
- [UpdateCommissionProgramRequest](docs/Model/UpdateCommissionProgramRequest.md)
- [UpdateCompanyRequest](docs/Model/UpdateCompanyRequest.md)
- [UpdateCustomFieldMetaDataRequest](docs/Model/UpdateCustomFieldMetaDataRequest.md)
- [UpdateDefaultCommissionProgramRequest](docs/Model/UpdateDefaultCommissionProgramRequest.md)
- [UpdateEmailAddress](docs/Model/UpdateEmailAddress.md)
- [UpdateFreeTrialDiscountRequest](docs/Model/UpdateFreeTrialDiscountRequest.md)
- [UpdateLeadSourceExpenseRequest](docs/Model/UpdateLeadSourceExpenseRequest.md)
- [UpdateNoteRequest](docs/Model/UpdateNoteRequest.md)
- [UpdateNoteResponse](docs/Model/UpdateNoteResponse.md)
- [UpdateOpportunityRequestV2](docs/Model/UpdateOpportunityRequestV2.md)
- [UpdateOpportunityStageChecklistItem](docs/Model/UpdateOpportunityStageChecklistItem.md)
- [UpdateOpportunityStageRequest](docs/Model/UpdateOpportunityStageRequest.md)
- [UpdateOrderItemRequest](docs/Model/UpdateOrderItemRequest.md)
- [UpdateOrderRequest](docs/Model/UpdateOrderRequest.md)
- [UpdateOrderTotalDiscountRequest](docs/Model/UpdateOrderTotalDiscountRequest.md)
- [UpdateProductCategoryRequest](docs/Model/UpdateProductCategoryRequest.md)
- [UpdateProductCommissionProgramRequest](docs/Model/UpdateProductCommissionProgramRequest.md)
- [UpdateProductDiscountRequest](docs/Model/UpdateProductDiscountRequest.md)
- [UpdateProductInterestBundleRequest](docs/Model/UpdateProductInterestBundleRequest.md)
- [UpdateProductInterestRequest](docs/Model/UpdateProductInterestRequest.md)
- [UpdateProductInventoryRequest](docs/Model/UpdateProductInventoryRequest.md)
- [UpdateProductRequest](docs/Model/UpdateProductRequest.md)
- [UpdateShippingDiscountRequest](docs/Model/UpdateShippingDiscountRequest.md)
- [UpdateSubscriptionCommissionProgramRequest](docs/Model/UpdateSubscriptionCommissionProgramRequest.md)
- [UpdateSubscriptionPlanRequest](docs/Model/UpdateSubscriptionPlanRequest.md)
- [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)
- [UpdateTagCategoryResponse](docs/Model/UpdateTagCategoryResponse.md)
- [UpdateTagResponse](docs/Model/UpdateTagResponse.md)
- [UpdateTaskResponse](docs/Model/UpdateTaskResponse.md)
- [UpdateUserRequest](docs/Model/UpdateUserRequest.md)
- [UpdatedPaymentPlan](docs/Model/UpdatedPaymentPlan.md)
- [User](docs/Model/User.md)
- [UserGroup](docs/Model/UserGroup.md)
- [Webform](docs/Model/Webform.md)

## Authorization

Authentication schemes defined for the API:
### oauth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://accounts.infusionsoft.com/app/oauth/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

api@keap.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.70.0.872719-hf-202511041049`
    - Package version: `1.0.37`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
