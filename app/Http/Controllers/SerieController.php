<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{
    public function index() {
        // ON RECUREPERE LES INFORMATION DU PROJET
        $series = Serie::all();

        // $projectTasks = (object) [
        //     'todo'  => Task::projectTasks($project->id)->todo(),
        //     'doing' => Task::projectTasks($project->id)->doing(),
        //     'done'  => Task::projectTasks($project->id)->done(),
        // ];

        // $myTasks = (object) [
        //     'todo'  => Task::projectTasks($project->id)->myTasks()->todo(),
        //     'doing' => Task::projectTasks($project->id)->myTasks()->doing(),
        //     'done'  => Task::projectTasks($project->id)->myTasks()->done(),
        // ];

        return view('serie/index', [
            'series' => $series,
        ]);
    }
}
