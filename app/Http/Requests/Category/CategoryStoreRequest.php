<?php

declare(strict_types=1);

namespace App\Http\Requests\Category;

use App\DTO\Category\CategoryCreateDTO;
use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => 'required|max:200',
        ];
    }

    public function toDTO(): CategoryCreateDTO
    {
        return CategoryCreateDTO::fromRequest($this);
    }
}
