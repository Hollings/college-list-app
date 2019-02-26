<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ['name', 'city', 'state', 'zip'];

    /**
     * Takes a collection of colleges and creates a CSV file
     *
     * @param $idList
     * @return string
     */
    public static function generateCsv($colleges)
    {
        // Create CSV file
        $filePath = '/storage/';
        $fileName = 'college_export_' . date('dmyhms') . '.csv';
        $fp = fopen("./" . $filePath . $fileName, 'wb');

        // Generate the CSV headers based on the colleges table
        $headerColumn = \Schema::getColumnListing($colleges[0]->getTable());
        fputcsv($fp, $headerColumn);

        // Save each college's data on a new csv row
        foreach ($colleges as $key => $college) {
            fputcsv($fp, array_values($college->toArray()));
        }

        fclose($fp);

        // Not sure what format the response should be in.
        // Returning the link to the CSV file instead of the actual CSV text.
        return asset('storage/' . $fileName);
    }
}
