<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;

class SkillController extends Controller
{
    //
    public function index(){
        return response()->json("skill index");
    }
    // 
    public function store(StoreSkillRequest $request)
    {
        Skills::create($request->validated());
        return response()->json("Skill Created");
    }
}
