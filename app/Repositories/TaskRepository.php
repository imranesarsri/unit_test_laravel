<?php
namespace App\Repositories;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskRepository extends BaseRepository
{
    public function __construct(Task $Task)
    {
        parent::__construct($Task);
    }

    public function applySearchCriteria($query, $searchValue)
    {
        return $query->with('project')->where('name', 'like', '%' . $searchValue . '%');
    }

    public function applyFilterCriteria($query, $filterValue)
    {
        return $query->with('project')->where('project_id', $filterValue);
    }

    public function searchAndFilter($request)
    {
        return parent::searchAndFilter($request)->with('project')->paginate(5);
    }

    public function filterByProject($filterValue)
    {
        return parent::getData()->where('project_id', $filterValue)->paginate(5);
    }

}