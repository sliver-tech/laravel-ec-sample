<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function index()
    {
        $companies = Company::all();

        return view('admin.company.index')->with(['companies' => $companies]);
    }


    public function edit($company_id = null)
    {
        $company = Company::find($company_id);

        return view('admin.company.edit')->with(['company' => $company]);
    }


    public function store(Request $request, $company_id = null)
    {
        if ($company_id == null) {
            $action = '新規登録';

            Company::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);

        } else {
            $action = '更新';

            Company::find($company_id)->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                ]
            );
        }

        return view('admin.company.complete')->with(['action' => $action]);
    }

    public function delete($company_id)
    {
        Company::destroy($company_id);

        return view('admin.company.complete')->with(['action' => '削除']);
    }
}
