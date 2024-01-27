<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

'schemas' => [
    'default' => [
        'query' => [
            //retrieve a single user
            'user' => App\GraphQL\Queries\UserQuery::class,
            //retrieve a collection of users
            'users' => App\GraphQL\Queries\UsersQuery::class,
        ],
        'mutation' => [],
        'middleware' => []
    ],
],
'types' => [
    //user type definition
    'User' => App\GraphQL\Types\UserType::class,
],
