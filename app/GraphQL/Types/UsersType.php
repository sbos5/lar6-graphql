<?php
// app/GraphQL/Types/UserType.php

namespace App\GraphQL\Types;

use GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use App\User;

class UsersType extends GraphQLType {

    protected $attributes = [
        'name'          => 'Users', //defining the GraphQL type name
        'description'   => 'A User', //providing a description for the GraphQL type name
        'model'         => User::class, //mapping the GraphQL type to the Laravel model
    ];

    public function field():array
    {
        return [
            'id' => [
                //defining the id field as a non-null integer
                'type'          => Type::nonNull(Type::int()),
                'description'   => 'ID of the user',
            ],
            'name' => [
                //defining the name field as a non-null string
                'type'          => Type::nonNull(Type::string()),
                'description'   => 'Name of the user',
            ],
            'email' => [
                //defining the email field as a non-null string
                'type'          => Type::nonNull(Type::string()),
                'description'   => 'Email of the user',
            ],
        ];
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

