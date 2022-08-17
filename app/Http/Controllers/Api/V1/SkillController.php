<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillResource;
use App\Http\Resources\V1\SkillCollection;

class SkillController extends Controller
{
    //
    public function index(){
        return new SkillCollection(Skills::all());
    }
    // insert skill
    public function store(StoreSkillRequest $request)
    {
        Skills::create($request->validated());
        return response()->json("Skill Created");
    }

    // 
    public function show(Skills $skills)
    {
        return new SkillResource($skills);
    }

    // update skill
    public function update(StoreSkillRequest $request, Skills $skills)
    {
        $skills->update($request->validated());
        return response()->json("Skill Updated");
    }

    // delete the skill
    public function destroy(Skills $skills)
    {
        $skills->delete();
        return response()->json("Skill Deleted");
    }
}
