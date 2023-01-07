<?php

declare(strict_types=1);

namespace App\Services\Category;

use App\DTO\Category\CategoryCreateDTO;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CategoryService
{
    public function __construct(
        private readonly CategoryRepositoryInterface $categoryRepository,
    ) {
    }

    public function store(CategoryCreateDTO $dto): void
    {
        $this->categoryRepository->save($dto);
    }

    public function getAllPaginated(): LengthAwarePaginator
    {
        return $this->categoryRepository->getAllPaginated();
    }
}
