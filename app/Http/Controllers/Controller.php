<?php namespace App\Http\Controllers;

use Cerbero\Workflow\RunsWorkflow;
use Cerbero\Workflow\WorkflowRunner;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController implements WorkflowRunner {

	use DispatchesCommands, ValidatesRequests, RunsWorkflow;

}
