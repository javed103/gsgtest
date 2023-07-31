<?php

use yii\db\Migration;

class m230626_135100_Letter_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_letter_index",
            "description" => "app/letter/index"
        ],
        "view" => [
            "name" => "app_letter_view",
            "description" => "app/letter/view"
        ],
        "create" => [
            "name" => "app_letter_create",
            "description" => "app/letter/create"
        ],
        "update" => [
            "name" => "app_letter_update",
            "description" => "app/letter/update"
        ],
        "delete" => [
            "name" => "app_letter_delete",
            "description" => "app/letter/delete"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppLetterFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete"
        ],
        "AppLetterView" => [
            "index",
            "view"
        ],
        "AppLetterEdit" => [
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
