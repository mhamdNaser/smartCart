<?php

namespace App\Imports;

use App\Models\testpruduct;
use Maatwebsite\Excel\Concerns\ToModel;


class ProductImport implements ToModel

{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $product = testpruduct::where('Code', $row[0])->first();
        
        if ($product) {
            // If the product already exists, update its fields
            $product->update([
                'Name'      => $row[1],
                'discount'  => $row[2],
                'price'     => $row[3]
            ]);
        } else {
            // If the product does not exist, create a new one
            $product = new testpruduct([
                'Code'      => $row[0],
                'Name'      => $row[1],
                'discount'  => $row[2],
                'price'     => $row[3]
            ]);
        }

        return $product;
    }
}
