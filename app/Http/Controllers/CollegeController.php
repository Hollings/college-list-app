<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;

/**
 * Class CollegeController
 *
 * @package App\Http\Controllers
 */
class CollegeController extends Controller
{

    /**
     * Get all schools
     *
     * @return College[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $colleges = College::all();
        return $colleges;
    }


    /**
     * Return a single school
     *
     * @param College $college
     * @return mixed
     */
    public function show(College $college)
    {
        return $college;
    }

    /**
     * Add a school to the master list
     *
     * @param Request $request
     * @return College
     */
    public function store(Request $request)
    {
        // Check if the right data is in the request and return any errors
        $rules = array(
            'name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        );
        $validator = \Validator::make($request->all(), $rules);
        $errors = $validator->errors();
        if ($errors->any()) {
            return $errors;
        }

        // Create new college with the request data
        $college = new College;
        $college->fill($request->all());
        $college->save();

        return $college;
    }

    /**
     * Edit a school or its data in the master list
     *
     * @param Request $request
     * @return mixed
     */
    public function update(College $college,Request $request)
    {
//        return $request->all();
        // Check if the right data is in the request and return any errors
        $rules = array(
            'name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        );
        $validator = \Validator::make($request->all(), $rules);
        $errors = $validator->errors();
        if ($errors->any()) {
            return $errors;
        }

        // When validation passes, update the collection and save
        $college->fill($request->all());
        $college->save();

        return $college;
    }

    /**
     * Remove a school from the master list
     *
     * @param Request $request
     * @return string
     */
    public function destroy(College $college)
    {
        $college->delete();
        return "Deleted college ID $college->id";
    }

    /**
     * Delete multiple selected schools
     *
     * @param Request $request
     * @return string
     */
    public function deleteMany(Request $request)
    {
        $idList = json_decode($request->input('ids'));
        $colleges = College::whereIn("id", $idList);
        $count = $colleges->count();
        if ($count == 0) {
            return "No colleges selected";
        }
        $colleges->delete();
        return "$count colleges removed";

    }

    /**
     * Export selected schools to a CSV file
     *
     * @param Request $request
     * @return mixed
     */
    public function exportCSV(Request $request)
    {
        // Assuming a JSON array of IDs here
        $idList = json_decode($request->input('ids'));

        // Make sure any colleges were selected
        $colleges = College::whereIn("id", $idList)->get();
        if (!count($colleges)) {
            return "No colleges selected";
        }

        // Generate the CSV and return the file path
        $csv = College::generateCsv($colleges);
        return $csv;
    }

}
