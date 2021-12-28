<?php

namespace App\Services\Contracts;

interface TaskServiceInterface
{
    public static function update($id);

    public static function remove($id);
}