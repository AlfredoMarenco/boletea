<div class="bg-gray-50 p-4">
    <!--Form with aparts in Tailwind v2 to create a new event-->
    <div class="divide-y divide-gray-200">
        <div class="grid grid-cols-1 gap-8 py-10 md:grid-cols-3">
            <div class="px-4 sm:px-0">
                <h2 class="text-base font-semibold text-gray-900">Profile</h2>
                <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you
                    share.</p>
            </div>

            <form class="bg-white shadow-sm border border-gray-200 sm:rounded-lg md:col-span-2">
                <div class="px-4 py-6 sm:p-8">
                    <div class="grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md border border-gray-300 bg-white pl-3 focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                    <div class="text-gray-500 text-sm select-none">workcation.com/</div>
                                    <input id="username" type="text" name="username" placeholder="janesmith"
                                        class="flex-1 border-none focus:ring-0 focus:outline-none py-2 pl-1 pr-3 text-gray-900 placeholder-gray-400 sm:text-sm bg-transparent" />
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                            <div class="mt-2">
                                <textarea id="about" name="about" rows="3"
                                    class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
                        </div>

                        <div class="col-span-full">
                            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                            <div class="mt-2 flex items-center space-x-3">
                                <svg class="h-12 w-12 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zM6.145 17.812A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>
                                <button type="button"
                                    class="rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50">Change</button>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm font-medium text-gray-700">Cover photo</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border-2 border-dashed border-gray-300 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M1.5 6A2.25 2.25 0 013.75 3.75h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zm1.5 10.06V18a.75.75 0 00.75.75h16.5a.75.75 0 00.75-.75v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" />
                                    </svg>
                                    <div class="mt-4 flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none">
                                            <span>Upload a file</span>
                                            <input id="file-upload" type="file" name="file-upload" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end space-x-6 border-t border-gray-200 px-4 py-4 sm:px-8">
                    <button type="button" class="text-sm font-semibold text-gray-700">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
