<?php

declare(strict_types=1);

namespace App\DTO\Category;

use Illuminate\Http\Request;

class CategoryCreateDTO
{
    public function __construct(
        public int $userId,
        public readonly string $description
    ) {
    }

    public static function fromArray(array $data): CategoryCreateDTO
    {
        return new CategoryCreateDTO(
            userId: auth()->id(),
            description: $data['description']
        );
    }

    public static function fromRequest(Request $request): CategoryCreateDTO
    {
        return new CategoryCreateDTO(
            userId: auth()->id(),
            description: $request->get('description')
        );
    }
}
