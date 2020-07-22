<div class="mt-6">
    <label for="profile_pic" class="flex text-sm leading-5 font-medium text-gray-700">
        SSM <span class="text-red-700 ml-1">*</span>
        <a href="{{ secure_asset('public/docs/ssm.pdf') }}" target="_blank">
            <svg class="h-5 w-5 ml-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </label>
    <div id="ssm-div"
        class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 @error('doc_ssm') border-red-500 @enderror border-dashed rounded-md cursor-pointer"
        style="display: block;">
        @if(isset(auth()->user()->pinjaman->document_ssm))
        <div class="flex" x-data="{ open: false }">
            <div class="justify-center">
                <span class="inline-flex rounded-md shadow-sm">
                    <a href="{{ secure_asset('public/storage/'.auth()->user()->ic_no. '/' . auth()->user()->pinjaman->document_ssm) }}"
                        target="_blank" type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Muat Turun
                    </a>
                </span>
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="submit"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                        @click.prevent="open = true">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Padam Fail
                    </button>
                </span>
            </div>

            {{-- delete gambar modal --}}
            <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center"
                x-show="open" x-cloak>
                <div class="fixed inset-0 transition-opacity"
                    x-show="open" x-cloak
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start=" opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                    x-show="open" x-cloak
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start=" opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" stroke="currentColor"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Padam Fail SSM!
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm leading-5 text-gray-500">
                                    Adakah anda pasti untuk memadam fail SSM ini?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                onclick="event.preventDefault();deleteSSM({{auth()->user()->pinjaman->id}})">
                                Padam!
                            </button>
                        </span>
                        <span
                            class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                            <button type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                @click="open = false">
                                Batal
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            {{-- end delete gambar modal --}}
        </div>
        @else
        <div class="text-center">
            <input type="file" name="doc_ssm" id="ssm" class="hidden" />
            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                viewBox="0 0 48 48">
                <path
                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="mt-1 text-sm text-gray-600">
                <a
                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition duration-150 ease-in-out">
                    Muat naik
                </a>
            </p>
            <p class="mt-1 text-xs text-gray-500">
                Salinan lesen/permit daripada Pihak Berkuasa Tempatan (PBT)/Daftar Perniagaan (SSM) yang sah/Dokumen yang mengesahkan pemohon menjalankan perniagaan
            </p>
            <p class="mt-1 text-xs text-gray-500">
                Bagi SSM : Sila Kemukakan Borang E, Maklumat Pemilikan & Maklumat Perniagaan
            </p>
            <p class="mt-1 text-xs text-gray-500">
                PDF sahaja | Saiz Maksimum: 3MB
            </p>
            @error('doc_ssm')
            <p class="text-red-500 text-xs italic mt-4">
                Ruangan Dokument Sokongan - SSM diperlukan
            </p>
            @enderror
        </div>
        @endif
    </div>
    {{-- test --}}
    <div id="ssm-uploaded-div"
        class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer"
        style="display:none">
        <span class="mt-3 inline-flex rounded-md shadow-sm">
            <a id="ssm-buttonDel" type="button"
                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                onclick="ssmDelFile()">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                    <path fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd">
                </svg>
                Padam Fail
            </a>
        </span>
        <span id="ssm-uploaded">Tiada fail diupload.</span>
    </div>
    {{-- end test --}}
</div>