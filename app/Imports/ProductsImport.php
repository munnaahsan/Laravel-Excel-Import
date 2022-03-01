<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Product([
            'parent_category' => $row['parent_category'],
            'category'=>$row['category'],
            'sub_category'=>$row['sub_category'],
            'part_name'=>$row['part_name'],
            'part_no'=>$row['part_no'],
        ]);
    }
    public function rules(): array
    {
       return [
            '*.part_no' => ['unique:products,part_no']
       ];
    }
}
