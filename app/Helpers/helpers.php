<?php

/**
 * Rules for Validator
 */
function vRules(string $class) : array
{
    return match($class) {
        'App\Models\Person' => [
            'form.name' => 'required|max:50',
            'form.middlename' => 'required|max:50',
            'form.lastname' => 'required|max:50',
            'form.gender' => 'required'
        ]
    };
}

/**
 * Custom messages for Validator
 */
function vMessages(string $class) : array
{
    return match($class) {
        'App\Models\Person' => [
            'form.name.required' => 'El Nombre es obligatorio',
            'form.middlename.required' => 'El Apellido Paterno es obligatorio',
            'form.lastname.required' => 'El Apellido Materno es obligatorio',
            'form.gender.required' => 'El Genero es obligatorio'
        ]
    };
}