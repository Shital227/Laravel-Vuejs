<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Create new job posting</h1>
        </div>
        {{-- TODO: Add form here --}}

        <form class="py-5" wire:submit.prevent="addJob">
            <div class="flex flex-col sm:flex-row w-full">
                <!-- Start coding here -->
                <div
                    class="sm:w-[70%] flex w-full p-4 flex-col rounded-lg bg-white shadow-sm border border-slate-200 mr-5">
                    <div class="overflow-x-auto">
                        <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <div class="mb-6 flex justify-between items-center py-1">
                                <h5 class="text-xl font-semibold text-slate-800">Job details</h5>
                            </div>
                            <div class="mb-6">
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input type="text" id="title" wire:model="formData.title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Job posting title"  />
                                @error('formData.title')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-6">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea id="description" wire:model="formData.description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Job posting description" ></textarea>
                                @error('formData.description')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="experience"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Experience</label>
                                    <input type="text" id="experience" wire:model="formData.experience"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Eg. 1-3 Yrs"  />
                                    @error('formData.experience')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div>
                                    <label for="salary"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary</label>
                                    <input type="text" id="salary" wire:model="formData.salary"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Eg. 2.75-5 Lacs PA"  />
                                    @error('formData.salary')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div>
                                    <label for="location"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                                    <input type="text" id="location" wire:model="formData.location"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Eg. Romote/Pune"  />
                                    @error('formData.location')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div>
                                    <label for="extra"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Extra
                                        Info</label>
                                    <input type="text" id="extra" wire:model="formData.extra"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Eg. Full Time, Urgent/Part Time, Flexible"  />
                                    <p class="text-gray-600 text-xs italic">Please use comma seperated values
                                    </p>
                                    @error('formData.extra')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror


                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="sm:w-[30%] flex w-full flex-col ">
                    <!-- Company Details Box (Top Box) -->
                    <div class=" p-4 mb-6 rounded-lg bg-white shadow-sm border border-slate-200">
                        <h5 class="text-xl font-semibold text-slate-800 mb-4">Company details</h5>
                        <div class="mb-6">
                            <label for="company_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" wire:model="formData.company_name" id="company_name"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                                placeholder="Company Name"  />
                            @error('formData.company_name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="mb-6">
                            <label for="Logo"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Logo</label>
                            <input type="file" wire:model="formData.company_logo" id="Logo"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                                 />
                            @error('formData.company_logo')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    <!-- Skills Box (Bottom Box) -->
                    <div class="  p-4  rounded-lg bg-white shadow-sm border border-slate-200">
                        <h5 class="text-xl font-semibold text-slate-800 mb-4">Skills</h5>
                        <div class="mb-6">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                            <select multiple wire:model="formData.skills"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                                <option disabled>Select Skills</option>
                                @foreach ($skills as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            @error('formData.skills')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                </div>


            </div>
            <div>
                <button type="submit"
                    class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
            </div>
        </form>
    </div>
</div>
