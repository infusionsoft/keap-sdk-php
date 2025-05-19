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
    "infusionsoft/keap-sdk": "*@dev"
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
$id = 'id_example'; // string | id
$affiliate_add_to_program_request = new \Keap\Core\V2\Model\AffiliateAddToProgramRequest(); // \Keap\Core\V2\Model\AffiliateAddToProgramRequest | affiliateAddToProgramRequest

try {
    $apiInstance->addAffiliateToProgramUsingPOST($id, $affiliate_add_to_program_request);
} catch (Exception $e) {
    echo 'Exception when calling AffiliateApi->addAffiliateToProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.keap.com/crm/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AffiliateApi* | [**addAffiliateToProgramUsingPOST**](docs/Api/AffiliateApi.md#addaffiliatetoprogramusingpost) | **POST** /v2/affiliates/{id}:assignToProgram | Assign Affiliate to Commission program
*AffiliateApi* | [**addAffiliateUsingPOST**](docs/Api/AffiliateApi.md#addaffiliateusingpost) | **POST** /v2/affiliates | Create an Affiliate
*AffiliateApi* | [**addCommissionProgramUsingPOST**](docs/Api/AffiliateApi.md#addcommissionprogramusingpost) | **POST** /v2/affiliates/commissionPrograms | Create an Affiliate Commission Program
*AffiliateApi* | [**assignProductCommissionProgramUsingPOST**](docs/Api/AffiliateApi.md#assignproductcommissionprogramusingpost) | **POST** /v2/affiliates/commissionPrograms/productCommissionProgram/{commission_program_id} | Assign a Product Commission Program
*AffiliateApi* | [**assignSubscriptionCommissionProgramUsingPOST**](docs/Api/AffiliateApi.md#assignsubscriptioncommissionprogramusingpost) | **POST** /v2/affiliates/commissionPrograms/subscriptionCommissionProgram/{commission_program_id} | Assign a Subscription Commission Program
*AffiliateApi* | [**createDefaultCommissionProgramUsingPOST**](docs/Api/AffiliateApi.md#createdefaultcommissionprogramusingpost) | **POST** /v2/affiliates/commissionPrograms/defaultCommissionProgram/{commission_program_id} | Create a Default Commission Program
*AffiliateApi* | [**createRedirectLinkUsingPOST**](docs/Api/AffiliateApi.md#createredirectlinkusingpost) | **POST** /v2/affiliates/redirects | Create an Affiliate Link
*AffiliateApi* | [**deleteAffiliateCommissionProgramUsingDELETE**](docs/Api/AffiliateApi.md#deleteaffiliatecommissionprogramusingdelete) | **DELETE** /v2/affiliates/commissionPrograms/{commission_program_id} | Delete a Commission Program
*AffiliateApi* | [**deleteAffiliateUsingDELETE**](docs/Api/AffiliateApi.md#deleteaffiliateusingdelete) | **DELETE** /v2/affiliates/{id} | Delete Affiliate
*AffiliateApi* | [**deleteRedirectLinkUsingDELETE**](docs/Api/AffiliateApi.md#deleteredirectlinkusingdelete) | **DELETE** /v2/affiliates/redirects/{redirect_id} | Delete an Affiliate Link
*AffiliateApi* | [**getAffiliateCommissionTotalUsingGET**](docs/Api/AffiliateApi.md#getaffiliatecommissiontotalusingget) | **GET** /v2/affiliates/{affiliate_id}/commissionTotal | Retrieve Affiliate Commission Earned and View LedgerURl for portal
*AffiliateApi* | [**getAffiliateCommissionsUsingGET**](docs/Api/AffiliateApi.md#getaffiliatecommissionsusingget) | **GET** /v2/affiliates/{affiliate_id}:commissions | Retrieve Affiliate Commission and Clawbacks
*AffiliateApi* | [**getAffiliateUsingGET1**](docs/Api/AffiliateApi.md#getaffiliateusingget1) | **GET** /v2/affiliates/{id} | Retrieve an Affiliate
*AffiliateApi* | [**getCommissionProgramUsingGET**](docs/Api/AffiliateApi.md#getcommissionprogramusingget) | **GET** /v2/affiliates/commissionPrograms/{commission_program_id} | Retrieve a Commission Program
*AffiliateApi* | [**getRedirectLinkUsingGET**](docs/Api/AffiliateApi.md#getredirectlinkusingget) | **GET** /v2/affiliates/redirects/{redirect_id} | Retrieve an Affiliate Link
*AffiliateApi* | [**listAffiliateCommissionProgramsUsingGET**](docs/Api/AffiliateApi.md#listaffiliatecommissionprogramsusingget) | **GET** /v2/affiliates/commissionPrograms | List Affiliate Commission Programs
*AffiliateApi* | [**listAffiliateLinksUsingGET**](docs/Api/AffiliateApi.md#listaffiliatelinksusingget) | **GET** /v2/affiliates/redirects | List Affiliate Links
*AffiliateApi* | [**listSummariesUsingGET1**](docs/Api/AffiliateApi.md#listsummariesusingget1) | **GET** /v2/affiliates/summaries | List Affiliate Summaries
*AffiliateApi* | [**removeAffiliateFromProgramUsingPOST**](docs/Api/AffiliateApi.md#removeaffiliatefromprogramusingpost) | **POST** /v2/affiliates/{id}:removeFromProgram | Remove an Affiliate from a Commission Program
*AffiliateApi* | [**removeProductCommissionFromCommissionsUsingPOST**](docs/Api/AffiliateApi.md#removeproductcommissionfromcommissionsusingpost) | **POST** /v2/affiliates/commissionPrograms/{commission_id}:removeProductCommission | Remove a Product from a Commission Program
*AffiliateApi* | [**removeSubscriptionPlanCommissionFromCommissionsUsingPOST**](docs/Api/AffiliateApi.md#removesubscriptionplancommissionfromcommissionsusingpost) | **POST** /v2/affiliates/commissionPrograms/{commission_id}:removeSubscriptionCommission | Remove a Subscription from a Commission Program
*AffiliateApi* | [**updateAffiliateUsingPATCH**](docs/Api/AffiliateApi.md#updateaffiliateusingpatch) | **PATCH** /v2/affiliates/{id} | Update an Affiliate
*AffiliateApi* | [**updateCommissionProgramUsingPATCH**](docs/Api/AffiliateApi.md#updatecommissionprogramusingpatch) | **PATCH** /v2/affiliates/commissionPrograms/{commission_program_id} | Update an Affiliate Commission Program
*AffiliateApi* | [**updateDefaultCommissionProgramUsingPATCH**](docs/Api/AffiliateApi.md#updatedefaultcommissionprogramusingpatch) | **PATCH** /v2/affiliates/commissionPrograms/defaultCommissionPrograms/{commission_program_id} | Update a Default Commission Program
*AffiliateApi* | [**updateProductCommissionProgramUsingPATCH**](docs/Api/AffiliateApi.md#updateproductcommissionprogramusingpatch) | **PATCH** /v2/affiliates/commissionPrograms/productCommissionPrograms/{commission_program_id} | Update a Product Commission Program
*AffiliateApi* | [**updateRedirectLinkUsingPATCH**](docs/Api/AffiliateApi.md#updateredirectlinkusingpatch) | **PATCH** /v2/affiliates/redirects/{redirect_id} | Update an Affiliate Link
*AffiliateApi* | [**updateSubscriptionCommissionProgramUsingPATCH**](docs/Api/AffiliateApi.md#updatesubscriptioncommissionprogramusingpatch) | **PATCH** /v2/affiliates/commissionPrograms/subscriptionCommissionPrograms/{commission_program_id} | Update a Subscription Commission Program
*AutomationApi* | [**addContactsToAutomationSequenceUsingPOST**](docs/Api/AutomationApi.md#addcontactstoautomationsequenceusingpost) | **POST** /v2/automations/{automation_id}/sequences/{sequence_id}:addContacts | Add Contacts to an Automation Sequence
*AutomationApi* | [**deleteAutomationUsingDELETE**](docs/Api/AutomationApi.md#deleteautomationusingdelete) | **DELETE** /v2/automations | Delete an Automation
*AutomationApi* | [**getAutomationUsingGET**](docs/Api/AutomationApi.md#getautomationusingget) | **GET** /v2/automations/{automation_id} | Retrieve an Automation
*AutomationApi* | [**listAllAutomationIdsUsingGET**](docs/Api/AutomationApi.md#listallautomationidsusingget) | **GET** /v2/automations/ids | List Automations Ids
*AutomationApi* | [**listAutomationsUsingGET**](docs/Api/AutomationApi.md#listautomationsusingget) | **GET** /v2/automations | List Automations
*AutomationApi* | [**updateAutomationCategoryUsingPUT**](docs/Api/AutomationApi.md#updateautomationcategoryusingput) | **PUT** /v2/automations/category | Update an Automation&#39;s Category
*AutomationCategoryApi* | [**createCategoryUsingPOST**](docs/Api/AutomationCategoryApi.md#createcategoryusingpost) | **POST** /v2/automationCategory | Create automation category
*AutomationCategoryApi* | [**deleteCategoriesUsingDELETE**](docs/Api/AutomationCategoryApi.md#deletecategoriesusingdelete) | **DELETE** /v2/automationCategory | Delete automation category
*AutomationCategoryApi* | [**listCategoriesUsingGET**](docs/Api/AutomationCategoryApi.md#listcategoriesusingget) | **GET** /v2/automationCategory | List automation categories
*AutomationCategoryApi* | [**patchCategoryUsingPATCH**](docs/Api/AutomationCategoryApi.md#patchcategoryusingpatch) | **PATCH** /v2/automationCategory/{id} | Update automation category
*AutomationCategoryApi* | [**saveCategoryUsingPUT**](docs/Api/AutomationCategoryApi.md#savecategoryusingput) | **PUT** /v2/automationCategory | Save automation category
*BusinessProfileApi* | [**getBusinessProfileUsingGET**](docs/Api/BusinessProfileApi.md#getbusinessprofileusingget) | **GET** /v2/businessProfile | Retrieve Business Profile
*BusinessProfileApi* | [**updateBusinessProfileUsingPATCH**](docs/Api/BusinessProfileApi.md#updatebusinessprofileusingpatch) | **PATCH** /v2/businessProfile | Update Business Profile
*CampaignApi* | [**addContactsToCampaignSequenceUsingPOST1**](docs/Api/CampaignApi.md#addcontactstocampaignsequenceusingpost1) | **POST** /v2/campaigns/{campaign_id}/sequences/{sequence_id}:addContacts | Add Contacts to Campaign Sequence
*CampaignApi* | [**getCampaignUsingGET1**](docs/Api/CampaignApi.md#getcampaignusingget1) | **GET** /v2/campaigns/{campaign_id} | Retrieve a Campaign
*CampaignApi* | [**listCampaignsUsingGET1**](docs/Api/CampaignApi.md#listcampaignsusingget1) | **GET** /v2/campaigns | List Campaigns
*CampaignApi* | [**removeContactsFromCampaignSequenceUsingPOST**](docs/Api/CampaignApi.md#removecontactsfromcampaignsequenceusingpost) | **POST** /v2/campaigns/{campaign_id}/sequences/{sequence_id}:removeContacts | Remove Contacts from Campaign Sequence
*CompanyApi* | [**createCompanyUsingPOST1**](docs/Api/CompanyApi.md#createcompanyusingpost1) | **POST** /v2/companies | Create a Company
*CompanyApi* | [**deleteCompanyUsingDELETE**](docs/Api/CompanyApi.md#deletecompanyusingdelete) | **DELETE** /v2/companies/{company_id} | Delete a Company
*CompanyApi* | [**getCompanyUsingGET1**](docs/Api/CompanyApi.md#getcompanyusingget1) | **GET** /v2/companies/{company_id} | Retrieve a Company
*CompanyApi* | [**listCompaniesUsingGET1**](docs/Api/CompanyApi.md#listcompaniesusingget1) | **GET** /v2/companies | List Companies
*CompanyApi* | [**updateCompanyUsingPATCH1**](docs/Api/CompanyApi.md#updatecompanyusingpatch1) | **PATCH** /v2/companies/{company_id} | Update a Company
*ContactApi* | [**createContactLinkTypeUsingPOST**](docs/Api/ContactApi.md#createcontactlinktypeusingpost) | **POST** /v2/contacts/links/types | Create a Contact Link type
*ContactApi* | [**createContactUsingPOST1**](docs/Api/ContactApi.md#createcontactusingpost1) | **POST** /v2/contacts | Create a Contact
*ContactApi* | [**deleteContactUsingDELETE1**](docs/Api/ContactApi.md#deletecontactusingdelete1) | **DELETE** /v2/contacts/{contact_id} | Delete a Contact
*ContactApi* | [**getContactUsingGET1**](docs/Api/ContactApi.md#getcontactusingget1) | **GET** /v2/contacts/{contact_id} | Retrieve a Contact
*ContactApi* | [**linkContactsUsingPOST**](docs/Api/ContactApi.md#linkcontactsusingpost) | **POST** /v2/contacts:link | Link Contacts
*ContactApi* | [**listContactLinkTypesUsingGET**](docs/Api/ContactApi.md#listcontactlinktypesusingget) | **GET** /v2/contacts/links/types | List Contact Link types
*ContactApi* | [**listContactLinksUsingGET**](docs/Api/ContactApi.md#listcontactlinksusingget) | **GET** /v2/contacts/{contact_id}/links | List Linked Contacts
*ContactApi* | [**listContactsUsingGET1**](docs/Api/ContactApi.md#listcontactsusingget1) | **GET** /v2/contacts | List Contacts
*ContactApi* | [**retrieveContactModelUsingGET1**](docs/Api/ContactApi.md#retrievecontactmodelusingget1) | **GET** /v2/contacts/model | Retrieve Contact Model
*ContactApi* | [**unlinkContactsUsingPOST**](docs/Api/ContactApi.md#unlinkcontactsusingpost) | **POST** /v2/contacts:unlink | Delete Link between two Contacts
*ContactApi* | [**updateContactUsingPATCH**](docs/Api/ContactApi.md#updatecontactusingpatch) | **PATCH** /v2/contacts/{contact_id} | Update a Contact
*EmailApi* | [**createEmailUsingPOST1**](docs/Api/EmailApi.md#createemailusingpost1) | **POST** /v2/emails | Create an Email Record
*EmailApi* | [**createEmailsUsingPOST1**](docs/Api/EmailApi.md#createemailsusingpost1) | **POST** /v2/emails:batchAdd | Create a set of Email Records
*EmailApi* | [**deleteEmailUsingDELETE1**](docs/Api/EmailApi.md#deleteemailusingdelete1) | **DELETE** /v2/emails/{id} | Delete an Email Record
*EmailApi* | [**deleteEmailsUsingPOST1**](docs/Api/EmailApi.md#deleteemailsusingpost1) | **POST** /v2/emails:batchRemove | Remove a set of Email Records
*EmailApi* | [**getEmailTemplateUsingGET**](docs/Api/EmailApi.md#getemailtemplateusingget) | **GET** /v2/emails/templates/{email_template_id} | Retrieve an email template
*EmailApi* | [**getEmailUsingGET1**](docs/Api/EmailApi.md#getemailusingget1) | **GET** /v2/emails/{id} | Retrieve an Email
*EmailApi* | [**sendEmailTemplateUsingPOST**](docs/Api/EmailApi.md#sendemailtemplateusingpost) | **POST** /v2/emails/templates:send | Send an email based on a template
*EmailApi* | [**sendEmailUsingPOST1**](docs/Api/EmailApi.md#sendemailusingpost1) | **POST** /v2/emails:send | Send an Email
*FilesApi* | [**createFileUsingPOST1**](docs/Api/FilesApi.md#createfileusingpost1) | **POST** /v2/files | Create a file
*FilesApi* | [**deleteFileUsingDELETE1**](docs/Api/FilesApi.md#deletefileusingdelete1) | **DELETE** /v2/files/{file_id} | Delete a file
*FilesApi* | [**getFileDataUsingGET**](docs/Api/FilesApi.md#getfiledatausingget) | **GET** /v2/files/{file_id}:data | Retrieve a file&#39;s data
*FilesApi* | [**getFileUsingGET1**](docs/Api/FilesApi.md#getfileusingget1) | **GET** /v2/files/{file_id} | Retrieve a file
*FilesApi* | [**listFilesUsingGET1**](docs/Api/FilesApi.md#listfilesusingget1) | **GET** /v2/files | List all files
*FilesApi* | [**updateFileUsingPOST**](docs/Api/FilesApi.md#updatefileusingpost) | **POST** /v2/files/{file_id} | Update a file
*LeadSourceCategoriesApi* | [**createLeadSourceCategoryUsingPOST**](docs/Api/LeadSourceCategoriesApi.md#createleadsourcecategoryusingpost) | **POST** /v2/leadSourceCategories | Create a Lead Source Category
*LeadSourceCategoriesApi* | [**deleteLeadSourceCategoryUsingDELETE**](docs/Api/LeadSourceCategoriesApi.md#deleteleadsourcecategoryusingdelete) | **DELETE** /v2/leadSourceCategories/{lead_source_category_id} | Delete a Lead Source Category
*LeadSourceCategoriesApi* | [**getLeadSourceCategoryUsingGET**](docs/Api/LeadSourceCategoriesApi.md#getleadsourcecategoryusingget) | **GET** /v2/leadSourceCategories/{lead_source_category_id} | Retrieve a Lead Source Category
*LeadSourceCategoriesApi* | [**listCategoriesUsingGET1**](docs/Api/LeadSourceCategoriesApi.md#listcategoriesusingget1) | **GET** /v2/leadSourceCategories | List Lead Source Categories
*LeadSourceCategoriesApi* | [**updateLeadSourceCategoryUsingPATCH**](docs/Api/LeadSourceCategoriesApi.md#updateleadsourcecategoryusingpatch) | **PATCH** /v2/leadSourceCategories/{lead_source_category_id} | Update a Lead Source Category
*LeadSourceExpensesApi* | [**createLeadSourceExpenseUsingPOST**](docs/Api/LeadSourceExpensesApi.md#createleadsourceexpenseusingpost) | **POST** /v2/leadSources/{lead_source_id}/expenses | Create a Lead Source Expense
*LeadSourceExpensesApi* | [**deleteLeadSourceUsingDELETE1**](docs/Api/LeadSourceExpensesApi.md#deleteleadsourceusingdelete1) | **DELETE** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Delete a lead source expense
*LeadSourceExpensesApi* | [**getLeadSourceExpenseUsingGET**](docs/Api/LeadSourceExpensesApi.md#getleadsourceexpenseusingget) | **GET** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Retrieve a Lead Source Expense
*LeadSourceExpensesApi* | [**listLeadSourceExpensesUsingGET**](docs/Api/LeadSourceExpensesApi.md#listleadsourceexpensesusingget) | **GET** /v2/leadSources/{lead_source_id}/expenses | List Lead Source Expenses
*LeadSourceExpensesApi* | [**updateLeadSourceExpenseUsingPATCH**](docs/Api/LeadSourceExpensesApi.md#updateleadsourceexpenseusingpatch) | **PATCH** /v2/leadSources/{lead_source_id}/expenses/{lead_source_expense_id} | Update a Lead Source Expense
*LeadSourceRecurringExpensesApi* | [**createLeadSourceRecurringExpenseUsingPOST**](docs/Api/LeadSourceRecurringExpensesApi.md#createleadsourcerecurringexpenseusingpost) | **POST** /v2/leadSources/{lead_source_id}/recurringExpenses | Create a Lead Source Recurring Expense
*LeadSourceRecurringExpensesApi* | [**deleteLeadSourceRecurringExpenseUsingDELETE**](docs/Api/LeadSourceRecurringExpensesApi.md#deleteleadsourcerecurringexpenseusingdelete) | **DELETE** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Delete a Lead Source Recurring Expense
*LeadSourceRecurringExpensesApi* | [**getLeadSourceRecurringExpenseUsingGET**](docs/Api/LeadSourceRecurringExpensesApi.md#getleadsourcerecurringexpenseusingget) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Retrieve a Lead Source Recurring Expense
*LeadSourceRecurringExpensesApi* | [**listExpensesIncurredFromLeadSourceRecurringExpenseUsingGET**](docs/Api/LeadSourceRecurringExpensesApi.md#listexpensesincurredfromleadsourcerecurringexpenseusingget) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id}/expenses | Retrieves a list of expenses incurred from a recurring expense
*LeadSourceRecurringExpensesApi* | [**listLeadSourceRecurringExpensesUsingGET**](docs/Api/LeadSourceRecurringExpensesApi.md#listleadsourcerecurringexpensesusingget) | **GET** /v2/leadSources/{lead_source_id}/recurringExpenses | Retrieves a list of lead source recurring expenses
*LeadSourceRecurringExpensesApi* | [**updateLeadSourceRecurringExpenseUsingPATCH**](docs/Api/LeadSourceRecurringExpensesApi.md#updateleadsourcerecurringexpenseusingpatch) | **PATCH** /v2/leadSources/{lead_source_id}/recurringExpenses/{lead_source_recurring_expense_id} | Update a Lead Source Recurring Expense
*LeadSourcesApi* | [**createLeadSourceUsingPOST**](docs/Api/LeadSourcesApi.md#createleadsourceusingpost) | **POST** /v2/leadSources | Create a Lead Source
*LeadSourcesApi* | [**deleteLeadSourceUsingDELETE**](docs/Api/LeadSourcesApi.md#deleteleadsourceusingdelete) | **DELETE** /v2/leadSources/{lead_source_id} | Delete a Lead Source
*LeadSourcesApi* | [**getLeadSourceUsingGET**](docs/Api/LeadSourcesApi.md#getleadsourceusingget) | **GET** /v2/leadSources/{lead_source_id} | Retrieve a Lead Source
*LeadSourcesApi* | [**listLeadSourcesUsingGET**](docs/Api/LeadSourcesApi.md#listleadsourcesusingget) | **GET** /v2/leadSources | List Lead Sources
*LeadSourcesApi* | [**updateLeadSourceUsingPATCH**](docs/Api/LeadSourcesApi.md#updateleadsourceusingpatch) | **PATCH** /v2/leadSources/{lead_source_id} | Update a Lead Source
*NoteApi* | [**createNoteCustomFieldUsingPOST1**](docs/Api/NoteApi.md#createnotecustomfieldusingpost1) | **POST** /v2/notes/model/customFields | Create a Custom Field
*NoteApi* | [**createNoteUsingPOST1**](docs/Api/NoteApi.md#createnoteusingpost1) | **POST** /v2/contacts/{contact_id}/notes | Create a Note
*NoteApi* | [**deleteNoteUsingDELETE1**](docs/Api/NoteApi.md#deletenoteusingdelete1) | **DELETE** /v2/contacts/{contact_id}/notes/{note_id} | Delete a Note
*NoteApi* | [**getNoteUsingGET1**](docs/Api/NoteApi.md#getnoteusingget1) | **GET** /v2/contacts/{contact_id}/notes/{note_id} | Retrieve a Note
*NoteApi* | [**listNoteTemplatesUsingGET**](docs/Api/NoteApi.md#listnotetemplatesusingget) | **GET** /v2/notes/templates | Retrieve Note Templates
*NoteApi* | [**listNotesUsingGET1**](docs/Api/NoteApi.md#listnotesusingget1) | **GET** /v2/contacts/{contact_id}/notes | List Notes
*NoteApi* | [**retrieveNoteModelUsingGET1**](docs/Api/NoteApi.md#retrievenotemodelusingget1) | **GET** /v2/notes/model | Retrieve Note Model
*NoteApi* | [**updateNoteUsingPATCH**](docs/Api/NoteApi.md#updatenoteusingpatch) | **PATCH** /v2/contacts/{contact_id}/notes/{note_id} | Update a Note
*NoteApi* | [**updateNotesCustomFieldUsingPATCH**](docs/Api/NoteApi.md#updatenotescustomfieldusingpatch) | **PATCH** /v2/notes/model/customFields/{custom_field_id} | Update a Custom Field
*OpportunityApi* | [**createOpportunityCustomFieldsUsingPOST**](docs/Api/OpportunityApi.md#createopportunitycustomfieldsusingpost) | **POST** /v2/opportunities/model/customFields | Create an Opportunity Custom Field
*OpportunityApi* | [**createOpportunityStageUsingPOST**](docs/Api/OpportunityApi.md#createopportunitystageusingpost) | **POST** /v2/opportunities/stages | Create an Opportunity Stage
*OpportunityApi* | [**createOpportunityUsingPOST1**](docs/Api/OpportunityApi.md#createopportunityusingpost1) | **POST** /v2/opportunities | Create an Opportunity
*OpportunityApi* | [**deleteOpportunityStageUsingDELETE**](docs/Api/OpportunityApi.md#deleteopportunitystageusingdelete) | **DELETE** /v2/opportunities/stages/{stage_id} | Delete an Opportunity Stage
*OpportunityApi* | [**deleteOpportunityUsingDELETE**](docs/Api/OpportunityApi.md#deleteopportunityusingdelete) | **DELETE** /v2/opportunities/{opportunity_id} | Delete an Opportunity
*OpportunityApi* | [**getOpportunityStageUsingGET**](docs/Api/OpportunityApi.md#getopportunitystageusingget) | **GET** /v2/opportunities/stages/{stage_id} | Retrieve an Opportunity Stage
*OpportunityApi* | [**getOpportunityUsingGET1**](docs/Api/OpportunityApi.md#getopportunityusingget1) | **GET** /v2/opportunities/{opportunity_id} | Retrieve a Opportunity
*OpportunityApi* | [**listOpportunitiesUsingGET1**](docs/Api/OpportunityApi.md#listopportunitiesusingget1) | **GET** /v2/opportunities | List Opportunities
*OpportunityApi* | [**listOpportunityStagesUsingGET**](docs/Api/OpportunityApi.md#listopportunitystagesusingget) | **GET** /v2/opportunities/stages | List of Opportunity Stages
*OpportunityApi* | [**updateOpportunityCustomFieldUsingPATCH**](docs/Api/OpportunityApi.md#updateopportunitycustomfieldusingpatch) | **PATCH** /v2/opportunities/model/customFields/{custom_field_id} | Update a Opportunity&#39;s Custom Field
*OpportunityApi* | [**updateOpportunityStageUsingPATCH**](docs/Api/OpportunityApi.md#updateopportunitystageusingpatch) | **PATCH** /v2/opportunities/stages/{stage_id} | Update an Opportunity Stage
*OpportunityApi* | [**updateOpportunityUsingPATCH**](docs/Api/OpportunityApi.md#updateopportunityusingpatch) | **PATCH** /v2/opportunities/{opportunity_id} | Update an opportunity
*OrdersApi* | [**createOrderCustomFieldUsingPOST**](docs/Api/OrdersApi.md#createordercustomfieldusingpost) | **POST** /v2/orders/model/customFields | Create an Order Custom Field
*OrdersApi* | [**deleteOrderCustomFieldUsingDELETE**](docs/Api/OrdersApi.md#deleteordercustomfieldusingdelete) | **DELETE** /v2/orders/model/customFields/{custom_field_id} | Delete an Order Custom Field
*OrdersApi* | [**retrieveOrderCustomFieldModelUsingGET**](docs/Api/OrdersApi.md#retrieveordercustomfieldmodelusingget) | **GET** /v2/orders/model | Retrieve Order Custom Field Model
*OrdersApi* | [**updateOrderCustomFieldUsingPATCH**](docs/Api/OrdersApi.md#updateordercustomfieldusingpatch) | **PATCH** /v2/orders/model/customFields/{custom_field_id} | Update an Order Custom Field
*PaymentMethodConfigsApi* | [**createPaymentMethodConfigUsingPOST**](docs/Api/PaymentMethodConfigsApi.md#createpaymentmethodconfigusingpost) | **POST** /v2/paymentMethodConfigs | Create Payment Method Configuration
*ProductInterestBundlesApi* | [**addProductInterestUsingPOST**](docs/Api/ProductInterestBundlesApi.md#addproductinterestusingpost) | **POST** /v2/productInterestBundles/{id}/interests | Create a Product Interest in an existing Bundle
*ProductInterestBundlesApi* | [**createProductInterestBundleUsingPOST**](docs/Api/ProductInterestBundlesApi.md#createproductinterestbundleusingpost) | **POST** /v2/productInterestBundles | Create a Product Interest Bundle
*ProductInterestBundlesApi* | [**deleteProductInterestBundleUsingDELETE**](docs/Api/ProductInterestBundlesApi.md#deleteproductinterestbundleusingdelete) | **DELETE** /v2/productInterestBundles/{id} | Delete a Product Interest Bundle
*ProductInterestBundlesApi* | [**getProductInterestBundleUsingGET**](docs/Api/ProductInterestBundlesApi.md#getproductinterestbundleusingget) | **GET** /v2/productInterestBundles/{id} | Get a Product Interest Bundle
*ProductInterestBundlesApi* | [**listProductInterestBundlesUsingGET**](docs/Api/ProductInterestBundlesApi.md#listproductinterestbundlesusingget) | **GET** /v2/productInterestBundles | List Product Interest Bundles
*ProductInterestBundlesApi* | [**removeProductInterestUsingDELETE**](docs/Api/ProductInterestBundlesApi.md#removeproductinterestusingdelete) | **DELETE** /v2/productInterestBundles/{id}/interests/{interest_id} | Delete a Product Interest from an existing Bundle
*ProductInterestBundlesApi* | [**updateProductInterestBundleUsingPATCH**](docs/Api/ProductInterestBundlesApi.md#updateproductinterestbundleusingpatch) | **PATCH** /v2/productInterestBundles/{id} | Update a Product Interest Bundle
*ProductInterestBundlesApi* | [**updateProductInterestUsingPATCH**](docs/Api/ProductInterestBundlesApi.md#updateproductinterestusingpatch) | **PATCH** /v2/productInterestBundles/{id}/interests/{interest_id} | Update a Product Interest in an existing Bundle
*ReportingApi* | [**listReportsUsingGET**](docs/Api/ReportingApi.md#listreportsusingget) | **GET** /v2/reporting/reports | List Reports
*ReportingApi* | [**retrieveReportUsingGET**](docs/Api/ReportingApi.md#retrievereportusingget) | **GET** /v2/reporting/reports/{report_id} | Retrieve Report
*ReportingApi* | [**runReportUsingPOST**](docs/Api/ReportingApi.md#runreportusingpost) | **POST** /v2/reporting/reports/{report_id}:run | Run a Report
*SalesApi* | [**setMerchantGatewayAsDefaultUsingPOST**](docs/Api/SalesApi.md#setmerchantgatewayasdefaultusingpost) | **POST** /v2/sales/merchants/{id}:setDefault | Set default Merchant Account
*SettingsApi* | [**getApplicationConfigurationsUsingGET**](docs/Api/SettingsApi.md#getapplicationconfigurationsusingget) | **GET** /v2/settings/applications:getConfiguration | Get Application Configuration
*SettingsApi* | [**getContactOptionTypesUsingGET1**](docs/Api/SettingsApi.md#getcontactoptiontypesusingget1) | **GET** /v2/settings/contactOptionTypes | Get Contact Option types
*SettingsApi* | [**isApplicationEnabledUsingGET**](docs/Api/SettingsApi.md#isapplicationenabledusingget) | **GET** /v2/settings/applications:isEnabled | Get Application Status
*SubscriptionsApi* | [**createSubscriptionCustomFieldUsingPOST**](docs/Api/SubscriptionsApi.md#createsubscriptioncustomfieldusingpost) | **POST** /v2/subscriptions/model/customFields | Create a Subscription Custom Field
*SubscriptionsApi* | [**createSubscriptionV2UsingPOST**](docs/Api/SubscriptionsApi.md#createsubscriptionv2usingpost) | **POST** /v2/subscriptions | Create Subscription
*SubscriptionsApi* | [**deleteSubscriptionCustomFieldUsingDELETE**](docs/Api/SubscriptionsApi.md#deletesubscriptioncustomfieldusingdelete) | **DELETE** /v2/subscriptions/model/customFields/{custom_field_id} | Delete a Subscription Custom Field
*SubscriptionsApi* | [**retrieveSubscriptionCustomFieldModelUsingGET**](docs/Api/SubscriptionsApi.md#retrievesubscriptioncustomfieldmodelusingget) | **GET** /v2/subscriptions/model | Retrieve Subscription Custom Field Model
*SubscriptionsApi* | [**updateSubscriptionCustomFieldUsingPATCH**](docs/Api/SubscriptionsApi.md#updatesubscriptioncustomfieldusingpatch) | **PATCH** /v2/subscriptions/model/customFields/{custom_field_id} | Update a Subscription Custom Field
*TagsApi* | [**applyTagsUsingPOST**](docs/Api/TagsApi.md#applytagsusingpost) | **POST** /v2/tags/{tag_id}/contacts:applyTags | Apply Tag
*TagsApi* | [**createTagCategoryUsingPOST1**](docs/Api/TagsApi.md#createtagcategoryusingpost1) | **POST** /v2/tags/categories | Create Tag Category
*TagsApi* | [**createTagUsingPOST1**](docs/Api/TagsApi.md#createtagusingpost1) | **POST** /v2/tags | Create Tag
*TagsApi* | [**deleteTagCategoryUsingDELETE**](docs/Api/TagsApi.md#deletetagcategoryusingdelete) | **DELETE** /v2/tags/categories/{tag_category_id} | Delete Tag Category
*TagsApi* | [**deleteTagUsingDELETE**](docs/Api/TagsApi.md#deletetagusingdelete) | **DELETE** /v2/tags/{tag_id} | Delete Tag
*TagsApi* | [**getCategoryUsingGET**](docs/Api/TagsApi.md#getcategoryusingget) | **GET** /v2/tags/categories/{tag_category_id} | Retrieve a Tag Category
*TagsApi* | [**getTagUsingGET1**](docs/Api/TagsApi.md#gettagusingget1) | **GET** /v2/tags/{tag_id} | Retrieve a Tag
*TagsApi* | [**listCompaniesForTagIdUsingGET1**](docs/Api/TagsApi.md#listcompaniesfortagidusingget1) | **GET** /v2/tags/{tag_id}/companies | List Tagged Companies
*TagsApi* | [**listContactsWithTagIdUsingGET**](docs/Api/TagsApi.md#listcontactswithtagidusingget) | **GET** /v2/tags/{tag_id}/contacts | List Tagged Contacts
*TagsApi* | [**listTagCategoriesUsingGET**](docs/Api/TagsApi.md#listtagcategoriesusingget) | **GET** /v2/tags/categories | List Tag Categories
*TagsApi* | [**listTagsUsingGET1**](docs/Api/TagsApi.md#listtagsusingget1) | **GET** /v2/tags | List Tags
*TagsApi* | [**removeTagsUsingPOST**](docs/Api/TagsApi.md#removetagsusingpost) | **POST** /v2/tags/{tag_id}/contacts:removeTags | Remove Tags
*TagsApi* | [**updateTagCategoryUsingPATCH**](docs/Api/TagsApi.md#updatetagcategoryusingpatch) | **PATCH** /v2/tags/categories/{tag_category_id} | Update a Tag Category
*TagsApi* | [**updateTagUsingPATCH**](docs/Api/TagsApi.md#updatetagusingpatch) | **PATCH** /v2/tags/{tag_id} | Update a Tag
*TaskApi* | [**createTaskCustomFieldUsingPOST1**](docs/Api/TaskApi.md#createtaskcustomfieldusingpost1) | **POST** /v2/tasks/model/customFields | Create a Custom Field
*TaskApi* | [**createTaskUsingPOST1**](docs/Api/TaskApi.md#createtaskusingpost1) | **POST** /v2/tasks | Create a Task
*TaskApi* | [**deleteTaskCustomFieldUsingDELETE**](docs/Api/TaskApi.md#deletetaskcustomfieldusingdelete) | **DELETE** /v2/tasks/model/customFields/{custom_field_id} | Delete a Custom Field
*TaskApi* | [**deleteTaskUsingDELETE1**](docs/Api/TaskApi.md#deletetaskusingdelete1) | **DELETE** /v2/tasks/{task_id} | Delete a Task
*TaskApi* | [**getTaskUsingGET1**](docs/Api/TaskApi.md#gettaskusingget1) | **GET** /v2/tasks/{task_id} | Retrieve a Task
*TaskApi* | [**listTasksUsingGET1**](docs/Api/TaskApi.md#listtasksusingget1) | **GET** /v2/tasks | List Tasks
*TaskApi* | [**retrieveTaskModelUsingGET1**](docs/Api/TaskApi.md#retrievetaskmodelusingget1) | **GET** /v2/tasks/model | Retrieve Task Model
*TaskApi* | [**updateTaskCustomFieldUsingPATCH**](docs/Api/TaskApi.md#updatetaskcustomfieldusingpatch) | **PATCH** /v2/tasks/model/customFields/{custom_field_id} | Update a Task&#39;s Custom Field
*TaskApi* | [**updateTaskUsingPATCH**](docs/Api/TaskApi.md#updatetaskusingpatch) | **PATCH** /v2/tasks/{task_id} | Update a Task

## Models

- [AddContactsToSequenceRequest](docs/Model/AddContactsToSequenceRequest.md)
- [AddContactsToSequenceResponse](docs/Model/AddContactsToSequenceResponse.md)
- [AddProductInterestRequest](docs/Model/AddProductInterestRequest.md)
- [AddToAutomationSequenceRequest](docs/Model/AddToAutomationSequenceRequest.md)
- [AddToAutomationSequenceResponse](docs/Model/AddToAutomationSequenceResponse.md)
- [Address](docs/Model/Address.md)
- [AddressInformation](docs/Model/AddressInformation.md)
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
- [AssignProductCategoriesRequest](docs/Model/AssignProductCategoriesRequest.md)
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
- [CancelSubscriptionsRequest](docs/Model/CancelSubscriptionsRequest.md)
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
- [CreateFunnelIntegrationRequest](docs/Model/CreateFunnelIntegrationRequest.md)
- [CreateFunnelIntegrationTriggerEvents](docs/Model/CreateFunnelIntegrationTriggerEvents.md)
- [CreateLeadSourceExpenseRequest](docs/Model/CreateLeadSourceExpenseRequest.md)
- [CreateLeadSourceRecurringExpenseRequest](docs/Model/CreateLeadSourceRecurringExpenseRequest.md)
- [CreateLeadSourceRequest](docs/Model/CreateLeadSourceRequest.md)
- [CreateNoteRequest](docs/Model/CreateNoteRequest.md)
- [CreateOpportunityRequest](docs/Model/CreateOpportunityRequest.md)
- [CreateOpportunityStageChecklistItem](docs/Model/CreateOpportunityStageChecklistItem.md)
- [CreateOpportunityStageRequest](docs/Model/CreateOpportunityStageRequest.md)
- [CreateOrUpdateAffiliateLinkRequest](docs/Model/CreateOrUpdateAffiliateLinkRequest.md)
- [CreateOrderTotalDiscountRequest](docs/Model/CreateOrderTotalDiscountRequest.md)
- [CreatePaymentMethodConfigRequest](docs/Model/CreatePaymentMethodConfigRequest.md)
- [CreatePaymentRequest](docs/Model/CreatePaymentRequest.md)
- [CreateProductCategoryRequest](docs/Model/CreateProductCategoryRequest.md)
- [CreateProductCommissionProgramRequest](docs/Model/CreateProductCommissionProgramRequest.md)
- [CreateProductDiscountRequest](docs/Model/CreateProductDiscountRequest.md)
- [CreateProductInterestBundleRequest](docs/Model/CreateProductInterestBundleRequest.md)
- [CreateProductRequest](docs/Model/CreateProductRequest.md)
- [CreateReferralRequest](docs/Model/CreateReferralRequest.md)
- [CreateRestOrderItemRequest](docs/Model/CreateRestOrderItemRequest.md)
- [CreateShippingDiscountRequest](docs/Model/CreateShippingDiscountRequest.md)
- [CreateSubscriptionCommissionProgramRequest](docs/Model/CreateSubscriptionCommissionProgramRequest.md)
- [CreateSubscriptionPlanRequest](docs/Model/CreateSubscriptionPlanRequest.md)
- [CreateSubscriptionV2](docs/Model/CreateSubscriptionV2.md)
- [CreateTaskRequest](docs/Model/CreateTaskRequest.md)
- [CreateUpdateContactRequest](docs/Model/CreateUpdateContactRequest.md)
- [CreateUpdateLeadSourceCategoryRequest](docs/Model/CreateUpdateLeadSourceCategoryRequest.md)
- [CreateUpdateTagCategoryRequest](docs/Model/CreateUpdateTagCategoryRequest.md)
- [CreateUpdateTagRequest](docs/Model/CreateUpdateTagRequest.md)
- [CreateUpdateTaskRequest](docs/Model/CreateUpdateTaskRequest.md)
- [CreateUserRequestV2](docs/Model/CreateUserRequestV2.md)
- [CurrencyValue](docs/Model/CurrencyValue.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldMetaData](docs/Model/CustomFieldMetaData.md)
- [CustomFieldOption](docs/Model/CustomFieldOption.md)
- [CustomFieldValue](docs/Model/CustomFieldValue.md)
- [DefaultCommission](docs/Model/DefaultCommission.md)
- [DeleteEmailsRequest](docs/Model/DeleteEmailsRequest.md)
- [DeleteEmailsResponse](docs/Model/DeleteEmailsResponse.md)
- [DeleteFunnelIntegrationRequest](docs/Model/DeleteFunnelIntegrationRequest.md)
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
- [FunnelIntegrationAction](docs/Model/FunnelIntegrationAction.md)
- [FunnelIntegrationHttpRequest](docs/Model/FunnelIntegrationHttpRequest.md)
- [FunnelIntegrationSchemaField](docs/Model/FunnelIntegrationSchemaField.md)
- [FunnelIntegrationTriggerEventDTO](docs/Model/FunnelIntegrationTriggerEventDTO.md)
- [FunnelIntegrationTriggerResultDTO](docs/Model/FunnelIntegrationTriggerResultDTO.md)
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
- [LandingPage](docs/Model/LandingPage.md)
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
- [ListAffiliateSummariesResponse](docs/Model/ListAffiliateSummariesResponse.md)
- [ListAutomationCategoryResponse](docs/Model/ListAutomationCategoryResponse.md)
- [ListAutomationIdsResponse](docs/Model/ListAutomationIdsResponse.md)
- [ListAutomationResponse](docs/Model/ListAutomationResponse.md)
- [ListBasicContactResponse](docs/Model/ListBasicContactResponse.md)
- [ListCampaignsResponse](docs/Model/ListCampaignsResponse.md)
- [ListCategoryDiscountsResponse](docs/Model/ListCategoryDiscountsResponse.md)
- [ListCompaniesResponse](docs/Model/ListCompaniesResponse.md)
- [ListContactLinkTypesResponse](docs/Model/ListContactLinkTypesResponse.md)
- [ListContactLinksResponse](docs/Model/ListContactLinksResponse.md)
- [ListContactsResponse](docs/Model/ListContactsResponse.md)
- [ListCountriesResponse](docs/Model/ListCountriesResponse.md)
- [ListFilesResponse](docs/Model/ListFilesResponse.md)
- [ListFreeTrialDiscountsResponse](docs/Model/ListFreeTrialDiscountsResponse.md)
- [ListLandingPagesResponse](docs/Model/ListLandingPagesResponse.md)
- [ListLeadSourceCategoriesResponse](docs/Model/ListLeadSourceCategoriesResponse.md)
- [ListLeadSourceExpensesResponse](docs/Model/ListLeadSourceExpensesResponse.md)
- [ListLeadSourceRecurringExpensesResponse](docs/Model/ListLeadSourceRecurringExpensesResponse.md)
- [ListLeadSourcesResponse](docs/Model/ListLeadSourcesResponse.md)
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
- [ListRestMerchantAccountResponse](docs/Model/ListRestMerchantAccountResponse.md)
- [ListRestMerchantResponse](docs/Model/ListRestMerchantResponse.md)
- [ListRestShippingMethodsResponse](docs/Model/ListRestShippingMethodsResponse.md)
- [ListShippingDiscountsResponse](docs/Model/ListShippingDiscountsResponse.md)
- [ListSubscriptionPlansResponse](docs/Model/ListSubscriptionPlansResponse.md)
- [ListSubscriptionsResponse](docs/Model/ListSubscriptionsResponse.md)
- [ListTagCategoriesResponse](docs/Model/ListTagCategoriesResponse.md)
- [ListTaggedCompaniesResponse](docs/Model/ListTaggedCompaniesResponse.md)
- [ListTaggedContactsResponse](docs/Model/ListTaggedContactsResponse.md)
- [ListTagsResponse](docs/Model/ListTagsResponse.md)
- [ListTasksResponse](docs/Model/ListTasksResponse.md)
- [ListTransactionsResponse](docs/Model/ListTransactionsResponse.md)
- [ListUsersPaginatedResponse](docs/Model/ListUsersPaginatedResponse.md)
- [Note](docs/Model/Note.md)
- [NoteTemplate](docs/Model/NoteTemplate.md)
- [ObjectModel](docs/Model/ObjectModel.md)
- [OpportunityContact](docs/Model/OpportunityContact.md)
- [OpportunityStage](docs/Model/OpportunityStage.md)
- [OrderItemProduct](docs/Model/OrderItemProduct.md)
- [OrderItemTax](docs/Model/OrderItemTax.md)
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
- [Provinces](docs/Model/Provinces.md)
- [Referral](docs/Model/Referral.md)
- [RemoveContactsFromSequenceRequest](docs/Model/RemoveContactsFromSequenceRequest.md)
- [RemoveContactsFromSequenceResponse](docs/Model/RemoveContactsFromSequenceResponse.md)
- [Report](docs/Model/Report.md)
- [ReportEntryRecord](docs/Model/ReportEntryRecord.md)
- [ReportEntryValue](docs/Model/ReportEntryValue.md)
- [ReportExecutionResult](docs/Model/ReportExecutionResult.md)
- [Resource](docs/Model/Resource.md)
- [RestAffiliate](docs/Model/RestAffiliate.md)
- [RestApplyCommissionRequest](docs/Model/RestApplyCommissionRequest.md)
- [RestCreateOrderRequest](docs/Model/RestCreateOrderRequest.md)
- [RestEmailAddress](docs/Model/RestEmailAddress.md)
- [RestOpportunityStage](docs/Model/RestOpportunityStage.md)
- [RestProductOption](docs/Model/RestProductOption.md)
- [RestProductOptionValue](docs/Model/RestProductOptionValue.md)
- [RestSubscriptionPlan](docs/Model/RestSubscriptionPlan.md)
- [RestSubscriptionV2](docs/Model/RestSubscriptionV2.md)
- [RestV2Opportunity](docs/Model/RestV2Opportunity.md)
- [RestV2Order](docs/Model/RestV2Order.md)
- [RestV2OrderItem](docs/Model/RestV2OrderItem.md)
- [RestV2Product](docs/Model/RestV2Product.md)
- [RestV2Subscription](docs/Model/RestV2Subscription.md)
- [RestV2User](docs/Model/RestV2User.md)
- [SaveAutomationCategoryRequest](docs/Model/SaveAutomationCategoryRequest.md)
- [Sequence](docs/Model/Sequence.md)
- [SequencePath](docs/Model/SequencePath.md)
- [SetDefaultCommissionProgramResponse](docs/Model/SetDefaultCommissionProgramResponse.md)
- [ShippingDiscount](docs/Model/ShippingDiscount.md)
- [ShippingInformation](docs/Model/ShippingInformation.md)
- [ShippingMethod](docs/Model/ShippingMethod.md)
- [SocialAccount](docs/Model/SocialAccount.md)
- [StackTraceElement](docs/Model/StackTraceElement.md)
- [StageDetails](docs/Model/StageDetails.md)
- [SubscriptionCommission](docs/Model/SubscriptionCommission.md)
- [SubscriptionCommissionProgram](docs/Model/SubscriptionCommissionProgram.md)
- [SubscriptionPlan](docs/Model/SubscriptionPlan.md)
- [Tag](docs/Model/Tag.md)
- [TaggedCompany](docs/Model/TaggedCompany.md)
- [Task](docs/Model/Task.md)
- [Throwable](docs/Model/Throwable.md)
- [Transaction](docs/Model/Transaction.md)
- [URI](docs/Model/URI.md)
- [URL](docs/Model/URL.md)
- [UpdateAffiliateRequest](docs/Model/UpdateAffiliateRequest.md)
- [UpdateAutomationCategoryRequest](docs/Model/UpdateAutomationCategoryRequest.md)
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

- API version: `2.70.0.807403`
    - Package version: `1.0.7`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
