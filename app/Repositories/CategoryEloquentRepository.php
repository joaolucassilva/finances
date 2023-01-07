<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DTO\Category\CategoryCreateDTO;
use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CategoryEloquentRepository implements CategoryRepositoryInterface
{
    public function __construct(
        private readonly Category $category,
    ) {
    }

    public function save(CategoryCreateDTO $dto): void
    {
        $this->category
            ->newQuery()
            ->create([
                'user_id' => auth()->id(),
                'description' => $dto->description,
            ]);
    }

    public function getAllPaginated(): LengthAwarePaginator
    {
        return $this->category
            ->newQuery()
            ->paginate(10);
    }
}
