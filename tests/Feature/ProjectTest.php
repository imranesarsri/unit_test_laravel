<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\ProjectRepository;



class ProjectTest extends TestCase
{
    /**
     ** Test interface. **
     * page Home        : /
     * page Projects    : /projects
     * page Tasks       :/tasks
     * page create task : /tasks/create
     * page  Details    : /tasks/1
     * page edit        : /tasks/1/edit
     * page error404    : /asasas
     */


    // ==========================================================
    // ===================== Test interface =====================
    // ==========================================================

    //  test home page
    public function test_home_page(): void
    {
        $response = $this->get('/');
        // $response = $this->put('/tasks/destroy');
        // dd($response->getStatusCode());
        $response->assertStatus(200);
    }

    // //  test projects page
    // public function test_projects_page(): void
    // {
    //     $response = $this->get('/projects');
    //     $response->assertStatus(200);
    // }

    // //  test tasks page
    // public function test_tasks_page(): void
    // {
    //     $response = $this->get('/tasks');
    //     $response->assertStatus(200);
    // }

    // //  test page show task number 6
    // public function test_show_task_number_6(): void
    // {
    //     $response = $this->get('/tasks/6');
    //     $response->assertStatus(200);
    // }

    // //  test page create task
    // public function test_create_task(): void
    // {
    //     $response = $this->get('/tasks/create');
    //     $response->assertStatus(200);
    // }

    // //  test page edit task number 6
    // public function test_edit_task_number_6(): void
    // {
    //     $response = $this->get('/tasks/6/edit');
    //     $response->assertStatus(200);
    // }

    // ==========================================================
    // ==========================================================










    // public function test_method_getData()
    // {
    //     $project = new Project;
    //     $ProjectRepository = new ProjectRepository($project);
    //     $response = $ProjectRepository->getData()->paginate(5);
    // }
}
