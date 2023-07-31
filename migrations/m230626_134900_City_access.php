<?php

use yii\db\Migration;

class m230626_134900_City_access extends Migration
{
    /**
     * @var array controller all actions
     */
    public $permisions = [
        "index" => [
            "name" => "app_city_index",
            "description" => "app/city/index"
        ],
        "view" => [
            "name" => "app_city_view",
            "description" => "app/city/view"
        ],
        "create" => [
            "name" => "app_city_create",
            "description" => "app/city/create"
        ],
        "update" => [
            "name" => "app_city_update",
            "description" => "app/city/update"
        ],
        "delete" => [
            "name" => "app_city_delete",
            "description" => "app/city/delete"
        ]
    ];
    
    /**
     * @var array roles and maping to actions/permisions
     */
    public $roles = [
        "AppCityFull" => [
            "index",
            "view",
            "create",
            "update",
            "delete"
        ],
        "AppCityView" => [
            "index",
            "view"
        ],
        "AppCityEdit" => [
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
