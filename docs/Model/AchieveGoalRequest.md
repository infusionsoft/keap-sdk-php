# # AchieveGoalRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integration** | **string** | The integration name of the goal. Required when using integration/call_name approach. Use together with &#39;call_name&#39;. Mutually exclusive with automation_id/goal_id. | [optional]
**call_name** | **string** | The call name of the goal. Required when using integration/call_name approach. Use together with &#39;integration&#39;. Mutually exclusive with automation_id/goal_id. | [optional]
**automation_id** | **int** | The automation ID. Required when using automation_id/goal_id approach. Use together with &#39;goal_id&#39;. Mutually exclusive with integration/call_name. | [optional]
**goal_id** | **int** | The goal ID within the automation. Required when using automation_id/goal_id approach. Use together with &#39;automation_id&#39;. Mutually exclusive with integration/call_name. | [optional]
**contact_id** | **int** | The contact ID for whom to achieve the goal |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
