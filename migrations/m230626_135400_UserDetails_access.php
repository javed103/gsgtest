<?php

use yii\db\Migration;

class m230626_135400_UserDetails_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_user-details_index",
            "description" => "app/user-details/index"
        ],
        "view" => [
            "name" => "app_user-details_view",
            "description" => "app/user-details/view"
        ],
        "create" => [
            "name" => "app_user-details_create",
            "description" => "app/user-details/create"
        ],
        "update" => [
            "name" => "app_user-details_update",
            "description" => "app/user-details/update"
        ],
        "delete" => [
            "name" => "app_user-details_delete",
            "description" => "app/user-details/delete"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppUserDetailsFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete"
        ],
        "AppUserDetailsView" => [
            "index",
            "view"
        ],
        "AppUserDetailsEdit" => [
            "update",
            "create",
            "delete"
        ]
    ];
    
    public function up()
    {
        
        $permisions = [];
        $auth = \Yii::$app->authManager;

        /**
         * create permisions for each controller action
         */
        foreach ($this->permisions as $action => $permission) {
            $permisions[$action] = $auth->createPermission($permission['name']);
            $permisions[$action]->description = $permission['description'];
            $auth->add($permisions[$action]);
        }

        /**
         *  create roles
         */
        foreach ($this->roles as $roleName => $actions) {
            $role = $auth->createRole($roleName);
            $auth->add($role);

            /**
             *  to role assign permissions
             */
            foreach ($actions as $action) {
                $auth->addChild($role, $permisions[$action]);
            }
        }
    }

    public function down() {
        $auth = Yii::$app->authManager;

        foreach ($this->roles as $roleName => $actions) {
            $role = $auth->createRole($roleName);
            $auth->remove($role);
        }

        foreach ($this->permisions as $permission) {
            $authItem = $auth->createPermission($permission['name']);
            $auth->remove($authItem);
        }
    }
}
