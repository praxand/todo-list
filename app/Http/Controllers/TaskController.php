<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::orderBy('created_at', 'desc')->paginate(5);

        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show(Task $task): View
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function store(TaskRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Task::create($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully');
    }

    public function edit(Task $task): View
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function complete(Request $request, Task $task): RedirectResponse
    {
        $data = $request->has('is_completed') ? true : false;

        $task->is_completed = $data;

        $task->save();

        return redirect()->route('tasks.index');
    }

    public function clear(): RedirectResponse
    {
        $task = Task::where('is_completed', true)->delete();

        if (!$task) {
            return redirect()->route('tasks.index')
                ->with('error', 'No completed tasks to clear');
        }

        return redirect()->route('tasks.index')
            ->with('success', 'Completed tasks cleared successfully');
    }

    public function update(TaskRequest $request, Task $task): RedirectResponse
    {
        $validated = $request->validated();

        $validated['is_completed'] = false;

        $task->update($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }
}
