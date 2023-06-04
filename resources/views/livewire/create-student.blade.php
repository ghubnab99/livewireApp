<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <form wire:submit.prevent="save">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Student Name</label>
                <input type="text"
                        wire:model="student.name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Enter name"
                       required="">
                @error('student.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Grade</label>
                <input type="text"
                        wire:model="student.grade"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Enter Grade"
                       required="">
                @error('student.grade') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Department</label>
                <input type="text"
                        wire:model="student.department"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Enter department"
                       required="">
                @error('student.department') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>


            <!-- <div class="mb-6">
                <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Photo</label>
                <input type="file" class="form-control" wire:model="photo" style="padding: 3px 5px;" />
                @error('photo') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div> -->


            <div class="mb-6">
                <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Photo</label>
                <div wire:ignore x-data x-init="    
                    FilePond.setOptions({
                        server:{
                            process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                @this.upload('photo', file, load, error, progress)
                            },

                            revert: (filename, load) => {
                                @this.removeUpload('photo', filename, load)
                            }
                        }   
                    })
                    FilePond.create($refs.input);                        
                ">
                    <input type="file" x-ref="input"  class="form-control" wire:model="photo" />                
                </div>
                @error('photo') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>



            <div class="flex items-center justify-start space-x-4">
                <a href="/student-list" class="text-gray-900  font-medium  text-sm ">Back</a>
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Save
                </button>
            </div>            


        </form>

    </div>
</div>