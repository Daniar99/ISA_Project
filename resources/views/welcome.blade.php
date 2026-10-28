<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Assignment & Exam Tracker</title>
    <!-- Tailwind CSS CDN for instant styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">
    <!-- Navbar -->
    <header class="border-b border-slate-800 bg-slate-900/80 backdrop-blur sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/25">
                    ISA
                </div>
                <div>
                    <h1 class="text-base font-bold text-white leading-tight">Campus Tracker API</h1>
                    <p class="text-xs text-indigo-400 font-medium">Assignment & Exam Management</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <a href="/api/assignments" target="_blank" class="text-xs bg-slate-800 hover:bg-slate-700 text-slate-300 px-3 py-1.5 rounded-lg border border-slate-700 transition flex items-center gap-1.5">
                    <span>View Raw JSON API</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                <button onclick="openModal()" class="text-xs sm:text-sm bg-indigo-600 hover:bg-indigo-500 text-white font-medium px-4 py-2 rounded-lg shadow-lg shadow-indigo-600/30 transition flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>New Assignment</span>
                </button>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Banner / Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-5">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Total Assignments</p>
                <p id="totalCount" class="text-3xl font-extrabold text-white mt-1">0</p>
            </div>
            <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-5">
                <p class="text-xs font-semibold uppercase tracking-wider text-amber-400">Pending</p>
                <p id="pendingCount" class="text-3xl font-extrabold text-amber-300 mt-1">0</p>
            </div>
            <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-5">
                <p class="text-xs font-semibold uppercase tracking-wider text-blue-400">In Progress</p>
                <p id="inProgressCount" class="text-3xl font-extrabold text-blue-300 mt-1">0</p>
            </div>
            <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-5">
                <p class="text-xs font-semibold uppercase tracking-wider text-emerald-400">Graded</p>
                <p id="gradedCount" class="text-3xl font-extrabold text-emerald-300 mt-1">0</p>
            </div>
        </div>

        <!-- Filter bar -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6">
            <div class="flex items-center space-x-2">
                <span class="text-xs uppercase font-bold text-slate-400">Filter By Status:</span>
                <div class="inline-flex rounded-lg bg-slate-800 p-1 border border-slate-700">
                    <button onclick="setFilter('')" id="filter-all" class="filter-btn px-3 py-1 text-xs font-medium rounded-md bg-indigo-600 text-white">All</button>
                    <button onclick="setFilter('pending')" id="filter-pending" class="filter-btn px-3 py-1 text-xs font-medium rounded-md text-slate-400 hover:text-white">Pending</button>
                    <button onclick="setFilter('in_progress')" id="filter-in_progress" class="filter-btn px-3 py-1 text-xs font-medium rounded-md text-slate-400 hover:text-white">In Progress</button>
                    <button onclick="setFilter('submitted')" id="filter-submitted" class="filter-btn px-3 py-1 text-xs font-medium rounded-md text-slate-400 hover:text-white">Submitted</button>
                    <button onclick="setFilter('graded')" id="filter-graded" class="filter-btn px-3 py-1 text-xs font-medium rounded-md text-slate-400 hover:text-white">Graded</button>
                </div>
            </div>
            <div class="text-xs text-slate-400">
                Connected to <code class="text-indigo-300 bg-slate-800 px-2 py-0.5 rounded">/api/assignments</code>
            </div>
        </div>

        <!-- Assignments Grid -->
        <div id="loading" class="text-center py-16">
            <div class="inline-block animate-spin w-8 h-8 border-4 border-indigo-500 border-t-transparent rounded-full mb-3"></div>
            <p class="text-sm text-slate-400">Fetching assignments from Laravel REST API...</p>
        </div>

        <div id="assignmentsList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 hidden"></div>

        <div id="emptyState" class="text-center py-16 bg-slate-800/30 rounded-2xl border border-slate-800 hidden">
            <svg class="mx-auto w-12 h-12 text-slate-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <p class="text-base font-semibold text-slate-300">No assignments found</p>
            <p class="text-xs text-slate-500 mt-1">Try another filter or click "New Assignment" above.</p>
        </div>
    </main>

    <!-- Create Assignment Modal -->
    <div id="modal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="bg-slate-800 border border-slate-700 rounded-2xl max-w-lg w-full p-6 shadow-2xl">
            <div class="flex items-center justify-between pb-4 border-b border-slate-700">
                <h3 class="text-lg font-bold text-white">New Assignment</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-white">&times;</button>
            </div>

            <!-- Error message container -->
            <div id="formError" class="mt-4 p-3 bg-rose-500/10 border border-rose-500/30 text-rose-300 text-xs rounded-xl hidden"></div>

            <form id="createForm" onsubmit="handleCreate(event)" class="mt-4 space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1">Title *</label>
                    <input type="text" id="title" required placeholder="e.g. Operating Systems Lab 4" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-indigo-500">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Course Code *</label>
                        <input type="text" id="course_code" required placeholder="e.g. CS302" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-indigo-500 uppercase">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Due Date *</label>
                        <input type="date" id="due_date" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-indigo-500">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Priority</label>
                        <select id="priority" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-indigo-500">
                            <option value="low">Low</option>
                            <option value="medium" selected>Medium</option>
                            <option value="high">High</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Status</label>
                        <select id="status" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-indigo-500">
                            <option value="pending" selected>Pending</option>
                            <option value="in_progress">In Progress</option>
                            <option value="submitted">Submitted</option>
                            <option value="graded">Graded</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-1">Description</label>
                    <textarea id="description" rows="3" placeholder="Brief summary of requirements..." class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-white focus:outline-none focus:border-indigo-500"></textarea>
                </div>

                <div class="flex justify-end space-x-3 pt-3 border-t border-slate-700">
                    <button type="button" onclick="closeModal()" class="px-4 py-2 rounded-lg text-xs font-medium text-slate-400 hover:text-white bg-slate-700/50">Cancel</button>
                    <button type="submit" id="submitBtn" class="px-4 py-2 rounded-lg text-xs font-semibold text-white bg-indigo-600 hover:bg-indigo-500 transition shadow-lg shadow-indigo-600/30">Create Assignment</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let currentFilter = '';
        let allAssignments = [];

        // Set minimum date to today
        document.getElementById('due_date').min = new Date().toISOString().split('T')[0];

        async function fetchAssignments() {
            document.getElementById('loading').classList.remove('hidden');
            document.getElementById('assignmentsList').classList.add('hidden');
            document.getElementById('emptyState').classList.add('hidden');

            try {
                const url = currentFilter ? `/api/assignments?status=${currentFilter}` : '/api/assignments';
                const response = await fetch(url, {
                    headers: { 'Accept': 'application/json' }
                });
                const result = await response.json();
                allAssignments = result.data || [];
                renderAssignments();
                updateStats();
            } catch (error) {
                console.error("Failed to load assignments:", error);
            } finally {
                document.getElementById('loading').classList.add('hidden');
            }
        }

        function updateStats() {
            // Count from unfiltered if we have all
            fetch('/api/assignments', { headers: { 'Accept': 'application/json' } })
                .then(r => r.json())
                .then(res => {
                    const data = res.data || [];
                    document.getElementById('totalCount').innerText = data.length;
                    document.getElementById('pendingCount').innerText = data.filter(a => a.status === 'pending').length;
                    document.getElementById('inProgressCount').innerText = data.filter(a => a.status === 'in_progress').length;
                    document.getElementById('gradedCount').innerText = data.filter(a => a.status === 'graded').length;
                });
        }

        function renderAssignments() {
            const container = document.getElementById('assignmentsList');
            const empty = document.getElementById('emptyState');
            container.innerHTML = '';

            if (allAssignments.length === 0) {
                empty.classList.remove('hidden');
                return;
            }

            empty.classList.add('hidden');
            container.classList.remove('hidden');

            const statusColors = {
                pending: 'bg-amber-500/10 text-amber-400 border-amber-500/30',
                in_progress: 'bg-blue-500/10 text-blue-400 border-blue-500/30',
                submitted: 'bg-purple-500/10 text-purple-400 border-purple-500/30',
                graded: 'bg-emerald-500/10 text-emerald-400 border-emerald-500/30'
            };

            const priorityColors = {
                low: 'text-slate-400',
                medium: 'text-amber-400',
                high: 'text-rose-400 font-bold'
            };

            allAssignments.forEach(item => {
                const card = document.createElement('div');
                card.className = "bg-slate-800/80 border border-slate-700/80 rounded-2xl p-5 hover:border-slate-600 transition flex flex-col justify-between";
                card.innerHTML = `
                    <div>
                        <div class="flex items-start justify-between gap-2 mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-indigo-400 bg-indigo-500/10 px-2.5 py-1 rounded-md border border-indigo-500/20">${item.course_code}</span>
                            <span class="text-xs font-semibold px-2 py-0.5 rounded-full border ${statusColors[item.status] || ''}">
                                ${item.status.replace('_', ' ')}
                            </span>
                        </div>
                        <h4 class="text-base font-bold text-white mb-1.5 leading-snug">${item.title}</h4>
                        <p class="text-xs text-slate-400 line-clamp-2 mb-4">${item.description || 'No description provided.'}</p>
                    </div>

                    <div class="pt-3 border-t border-slate-700/50 flex flex-col gap-2">
                        <div class="flex items-center justify-between text-xs text-slate-400">
                            <span>Due: <strong class="text-slate-200">${item.due_date}</strong></span>
                            <span>Priority: <span class="${priorityColors[item.priority]}">${item.priority.toUpperCase()}</span></span>
                        </div>

                        ${item.grade !== null ? `
                            <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-300 text-xs px-2.5 py-1 rounded-lg flex items-center justify-between">
                                <span>Grade Awarded:</span>
                                <span class="font-bold text-sm">${item.grade}/100</span>
                            </div>
                        ` : ''}

                        <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-700/40">
                            <!-- Quick status change (PATCH API call) -->
                            <select onchange="updateStatus(${item.id}, this.value)" class="text-xs bg-slate-900 border border-slate-700 rounded px-2 py-1 text-slate-300 focus:outline-none">
                                <option value="pending" ${item.status === 'pending' ? 'selected' : ''}>Pending</option>
                                <option value="in_progress" ${item.status === 'in_progress' ? 'selected' : ''}>In Progress</option>
                                <option value="submitted" ${item.status === 'submitted' ? 'selected' : ''}>Submitted</option>
                                <option value="graded" ${item.status === 'graded' ? 'selected' : ''}>Graded</option>
                            </select>

                            <!-- Delete (DELETE API call) -->
                            <button onclick="deleteAssignment(${item.id})" class="text-xs text-rose-400 hover:text-rose-300 transition flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                <span>Delete</span>
                            </button>
                        </div>
                    </div>
                `;
                container.appendChild(card);
            });
        }

        function setFilter(status) {
            currentFilter = status;
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.className = "filter-btn px-3 py-1 text-xs font-medium rounded-md text-slate-400 hover:text-white";
            });
            const activeId = status ? `filter-${status}` : 'filter-all';
            document.getElementById(activeId).className = "filter-btn px-3 py-1 text-xs font-medium rounded-md bg-indigo-600 text-white";
            fetchAssignments();
        }

        async function handleCreate(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const err = document.getElementById('formError');
            btn.disabled = true;
            btn.innerText = "Creating...";
            err.classList.add('hidden');

            const payload = {
                title: document.getElementById('title').value,
                course_code: document.getElementById('course_code').value,
                due_date: document.getElementById('due_date').value,
                priority: document.getElementById('priority').value,
                status: document.getElementById('status').value,
                description: document.getElementById('description').value || null
            };

            try {
                const res = await fetch('/api/assignments', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });

                if (!res.ok) {
                    const errorData = await res.json();
                    let msg = errorData.message || 'Validation error';
                    if (errorData.errors) {
                        msg = Object.values(errorData.errors).flat().join('<br>');
                    }
                    err.innerHTML = msg;
                    err.classList.remove('hidden');
                    return;
                }

                closeModal();
                document.getElementById('createForm').reset();
                fetchAssignments();
            } catch (error) {
                err.innerText = "Server error. Please check console.";
                err.classList.remove('hidden');
            } finally {
                btn.disabled = false;
                btn.innerText = "Create Assignment";
            }
        }

        async function updateStatus(id, newStatus) {
            let grade = null;
            if (newStatus === 'graded') {
                const promptGrade = prompt("Enter Grade (0-100):", "95");
                if (promptGrade !== null) {
                    grade = parseInt(promptGrade, 10);
                }
            }

            try {
                const res = await fetch(`/api/assignments/${id}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ status: newStatus, ...(grade !== null ? { grade } : {}) })
                });

                if (res.ok) {
                    fetchAssignments();
                } else {
                    alert("Could not update assignment status.");
                }
            } catch (err) {
                console.error(err);
            }
        }

        async function deleteAssignment(id) {
            if (!confirm("Are you sure you want to delete this assignment?")) return;

            try {
                const res = await fetch(`/api/assignments/${id}`, {
                    method: 'DELETE',
                    headers: { 'Accept': 'application/json' }
                });

                if (res.status === 204 || res.ok) {
                    fetchAssignments();
                } else {
                    alert("Failed to delete assignment.");
                }
            } catch (err) {
                console.error(err);
            }
        }

        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
            document.getElementById('modal').classList.remove('flex');
        }

        // Initial Load
        fetchAssignments();
    </script>
</body>
</html>
