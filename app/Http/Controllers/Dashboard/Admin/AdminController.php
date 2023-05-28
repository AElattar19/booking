<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins;
use Yajra\DataTables\Facades\DataTables;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

       
        if ($request->ajax()) {
            
                 $admins = Admins::all();
                 return Datatables::of($admins)
                    ->addIndexColumn()
                    ->addColumn('action', function ($admins) {

                        $html = '<a class="btn btn-info btn-sm" href="' . route('admins.edit', $admins->id) . '">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a> &nbsp;';
    
                            $html .= '<form action="' . route('admins.destroy', $admins->id) . '"
                                              method="post" style="display: inline-block;">
                                            ' . method_field('delete') . '
                                             ' . csrf_field() . '
                                            <button type="submit"
                                                    class="btn  modal-effect btn btn-sm btn-danger">
                                                <i class="fas fa-trash">
                                                </i>
                                            </button>
                                        </form>';
    
    
                        return $html;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('dashboard.admins.index');
    
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $admin = Admins::find($id);
        return view('dashboard.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //$Admins = Admins::where('id',$id)->first();
        $Admins = Admins::find($id);
        $Admins->delete();
        session()->flash('edit');
        return redirect()->route('admins.index');
    }
}
