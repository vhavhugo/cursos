<?php

namespace App\Repositories\Interfaces;

interface ClientRepositoryInterface{
    public function getBySubject($subject);
}