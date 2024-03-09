<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;
use App\Models\Project; // Import the Project model

class TaskTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_index_task()
    {
        $response = $this->get(route('tasks.index'));
        $response->assertOk();
    }

    public function test_create_task()
    {
        // Create a project first
        $project = Project::factory()->create();

        $task = [
            "name" => $this->faker->sentence,
            "description" => $this->faker->paragraph,
            "project_id" => $project->id // Use the generated project ID
        ];

        $response = $this->post(route('tasks.store'), $task);
        $response->assertRedirect();
        $this->assertDatabaseHas('tasks', $task);
    }

    public function test_delete_task()
    {
        // Create a task with a valid project
        $task = Task::factory()->create();

        $response = $this->delete(route('tasks.destroy', $task));
        $response->assertRedirect();
        $this->assertDatabaseMissing('tasks', $task->toArray());
    }

    public function test_update_task()
    {
        // Create a task with a valid project
        $task = Task::factory()->create();

        $data = [
            "name" => $this->faker->sentence,
            "description" => $this->faker->paragraph,
            "project_id" => $task->project_id // Use the existing project ID
        ];

        $response = $this->put(route('tasks.update', $task), $data);
        $response->assertRedirect();
        $this->assertDatabaseHas('tasks', $data);
    }
}
