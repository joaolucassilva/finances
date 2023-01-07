<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use App\DTO\Category\CategoryCreateDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CategoryRepositoryInterface
{
    public function save(CategoryCreateDTO $dto): void;

    public function getAllPaginated(): LengthAwarePaginator;
}
