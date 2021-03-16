<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\AboutDetails;
use App\Admin\Jobs;
use App\Admin\Partners;
use App\Admin\Projects;
use App\Admin\SkillDetails;
use App\Admin\Skils;
use App\Admin\TeamDetais;
use App\Admin\Teams;

class AboutController extends Controller
{
    public function view(){
        // About Heading 
        $slider = AboutDetails::all();
        // Project Details 
       $project = Projects::all();
        // Skill 
        $skill = Skils::all();
        // Skill Details 
        $skilldetails = SkillDetails::all();
        // Team Details 
        $teamdetails = TeamDetais::all();
        // Team 
        $team = Teams::all();
        // Job 
        $job = Jobs::all();
        // Partner 
        $partner = Partners::all();

        return view('frontend.about.about-view',compact('slider','project','skilldetails','skill','teamdetails','team','job','partner'));
        
    }
}
