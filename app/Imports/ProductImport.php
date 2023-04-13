<?php

namespace App\Imports;

use App\Models\testpruduct;
use App\Models\translation;
use Maatwebsite\Excel\Concerns\ToModel;
use Stichoza\GoogleTranslate\GoogleTranslate;

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
        $tren = new GoogleTranslate('en', 'ar');
        $trar = new GoogleTranslate('ar', 'en');

        if ($product) {
            // If the product already exists, update its fields
            $product->update([
                'discount' => $row[2],
                'price' => $row[3]
            ]);

            // Find the translation for the product in Arabic
            $arabicTranslation = Translation::where('product', $product->id)->where('local', 'ar')->first();
            if ($arabicTranslation) {
                // If Arabic translation exists, update its fields
                $arabicTranslation->update([
                    // 'text' => $row[1]
                    $text = $trar->translate($row[1]),
                    'text' => $text
                ]);
            } else {
                // If Arabic translation does not exist, create a new one
                $arabicTranslation = new Translation([
                    'product' => $product->id,
                    'local' => 'ar',
                    // 'text' => $row[1]
                    $text = $trar->translate($row[1]),
                    'text' => $text
                ]);
                $arabicTranslation->save();
            }

            // Find the translation for the product in English
            $englishTranslation = Translation::where('product', $product->id)->where('local', 'en')->first();
            if ($englishTranslation) {
                // If English translation exists, update its fields
                $englishTranslation->update([
                    // 'text' => $row[1]
                    $text = $tren->translate($row[1]),
                    'text' => $text
                ]);
            } else {
                // If English translation does not exist, create a new one
                $englishTranslation = new Translation([
                    'product' => $product->id,
                    'local' => 'en',
                    // 'text' => $row[1]
                    $text = $tren->translate($row[1]),
                    'text' => $text
                ]);
                $englishTranslation->save();
            }
        } else {
            // If the product does not exist, create a new one
            $product = new testpruduct([
                'Code' => $row[0],
                'discount' => $row[2],
                'price' => $row[3]
            ]);
            $product->save();

            // Create a new translation for the product in Arabic
            $arabicTranslation = new Translation([
                'product' => $product->id,
                'local' => 'ar',
                // 'text' => $row[1]
                $text = $trar->translate($row[1]),
                'text' => $text
            ]);
            $arabicTranslation->save();

            // Create a new translation for the product in English
            $englishTranslation = new Translation([
                'product' => $product->id,
                'local' => 'en',
                // 'text' => $row[1],
                $text = $tren->translate($row[1]),
                'text' => $text
            ]);
            $englishTranslation->save();
        }

        return $product;
    }
}
// class ProductImport implements ToModel

// {
//     /**
//     * @param array $row
//     *
//     * @return \Illuminate\Database\Eloquent\Model|null
//     */
//     public function model(array $row)
//     {
//         $product        = testpruduct::where('Code', $row[0])->first();
//         $translation    = translation::get();

//         if ($product) {
//             // If the product already exists, update its fields
//             $product->update([
//                 'discount'  => $row[2],
//                 'price'     => $row[3]
//             ]);
//             $translation->update([
//                 'product '      =>$product->id ,
//                 'text'          => $row[1],
//             ]);
//         } else {
//             // If the product does not exist, create a new one
//             $product = new testpruduct([
//                 'Code'      => $row[0],
//                 'discount'  => $row[2],
//                 'price'     => $row[3]
//             ]);
//             $translation->update([
//                 'product '      =>$product->id ,
//                 'text'          => $row[1],
//             ]);
//         }

//         return $product;
//     }
// }
