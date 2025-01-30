<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center py-8">
            <h1 class="text-2xl font-bold">Skills</h1>
        </div>

            <div class="flex flex-col sm:flex-row w-full">
            <!-- Start coding here -->
            <div
                class="sm:w-[70%] w-full mr-10 w-md bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Name</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($skills))
                                @foreach ($skills as $skill)
                                    <tr class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $skill['name'] }}</th>


                                        <td class="px-4 py-3 flex items-center justify-end">
                                            <a href="#"
                                                class="text-sm px-3 py-1.5 rounded hover:bg-slate-100 transition-colors text-blue-500">Edit</a>
                                            <a href="javascript:void(0)" onclick="confirmDelete({{ $skill['id'] }})"
                                                class="text-sm px-3 py-1.5 rounded hover:bg-slate-100 transition-colors text-red-500">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th scope="row" colspan="100"
                                        class="px-4 py-3 font-semibold text-gray-900 whitespace-nowrap dark:text-white text-center">
                                        No record found</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sm:w-[30%] flex w-full p-4 flex-col rounded-lg bg-white shadow-sm border border-slate-200 max-h-[270px]">
                <div class="overflow-x-auto">
                    <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <div class="flex justify-between items-center py-1">
                            <h5 class="text-xl font-semibold text-slate-800">Add new Skill</h5>
                        </div>
                        <form class="py-5" wire:submit.prevent="addSkill">
                            <div class="mb-6">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" wire:model="name" id="name"
                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                                    placeholder="Skill name" required />
                                @error('name')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(skillId) {
        if (confirm("Are you sure you want to delete this skill?")) {
            @this.call('deleteSkill', skillId);
        }
    }
</script>
