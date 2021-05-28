<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\Workspace\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
	'routes' => [
		[
			'name' => 'page#index',
			'url' => '/', 'verb' => 'GET'
		],
		[
			'name' => 'page#autoComplete',
			'url' => '/api/autoComplete/{term}',
			'verb' => 'GET'
		],
		[
			'name' => 'workspace_group_manager#addUserGroupUser',
			'url' => '/add/user/{uid}/toWspUserGroup/{gid}',
			'verb' => 'POST'
		],
		[
			'name' => 'workspace#getUserWorkspaces',
			'url' => '/spaces',
			'verb' => 'GET'
		],
		[
			'name' => 'workspace#create',
			'url' => '/spaces',
			'verb' => 'POST'
		],
		[
			'name' => 'workspace#addGroupAdvancedPermissions',
			'url' => '/spaces/{folderId}/group/{gid}/acl',
			'verb' => 'POST'
		],
		[
			'name' => 'workspace_group_manager#removeUserFromGroup', 
			'url' => '/remove/user/{uid}/groups',
			'verb' => 'DELETE'
		],
		[
			'name' => 'group#create',
			'url' => '/group/add/{group}',
			'verb' => 'POST',
		],
		[
			'name' => 'users_manager#getUsersWorkSpace',
			'url' => '/group/{gid}/users',
			'verb' => 'GET'
		],
		[
			'name' => 'workspace#rename',
			'url' => '/spaces/{folderId}',
			'verb' => 'PATCH'
		],
	]
];
