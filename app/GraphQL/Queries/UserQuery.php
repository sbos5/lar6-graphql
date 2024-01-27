<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// app/GraphQL/Queries/UserQuery.php

namespace App\GraphQL\Queries;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use App\User;

class UserQuery extends Query {

    protected $attributes = [
        'name'  => 'user',
    ];

   /* public function authorize(array $args = []):
    {
        return true;
    }
*/
    public function type():Type
    {
        return GraphQL::type('User'); //retrieve a single user
    }

    public function rules(array $args = []):array
    {
        return [
            'id' => [
                'required',
                'numeric',
                'min:1',
                'exists:users,id'
            ],
        ];
    }

    public function args():array
    {
        return [
            'id'    => [
                'name' => 'id',
                'type' => Type::int(),
            ],
        ];
    }

    public function resolve($root, $args, SelectFields $fields)
    {
        return User::findOrFail($args['id']);
    }

}
