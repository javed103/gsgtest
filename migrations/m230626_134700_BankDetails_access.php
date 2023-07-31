<?php

use yii\db\Migration;

class m230626_134700_BankDetails_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_bank-details_index",
            "description" => "app/bank-details/index"
        ],
        "view" => [
            "name" => "app_bank-details_view",
            "description" => "app/bank-details/view"
        ],
        "create" => [
            "name" => "app_bank-details_create",
            "description" => "app/bank-details/create"
        ],
        "update" => [
            "name" => "app_bank-details_update",
            "description" => "app/bank-details/update"
        ],
        "delete" => [
            "name" => "app_bank-details_delete",
            "description" => "app/bank-details/delete"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppBankDetailsFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete"
        ],
        "AppBankDetailsView" => [
            "index",
            "view"
        ],
        "AppBankDetailsEdit" => [
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
