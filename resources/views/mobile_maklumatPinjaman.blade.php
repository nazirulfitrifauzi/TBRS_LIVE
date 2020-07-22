<div x-show="tab === 'tab3'">
    <form method="post" action="{{ route('mobile.storePinjaman') }}" enctype="multipart/form-data">
        @csrf

        <div class="my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Keterangan Mengenai Pembiayaan Yang Dipohon
                        </h3>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6 mt-1">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="purchase_price"
                                        class="block text-sm font-medium leading-5 text-gray-700">
                                            Jumlah Pembiayaan Yang Diperlukan <span class="text-red-700">*</span></label>
                                    <select id="purchase_price" name="purchase_price"
                                            class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                                <option value="">Sila Pilih Jumlah Pembiayaan</option>
                                                <option value="1000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '1000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '1000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '1000' ? 'selected':'' }}
                                                    @endif
                                                >RM 1,000.00</option>
                                                <option value="2000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '2000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '2000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '2000' ? 'selected':'' }}
                                                    @endif
                                                >RM 2,000.00</option>
                                                <option value="3000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '3000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '3000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '3000' ? 'selected':'' }}
                                                    @endif
                                                >RM 3,000.00</option>
                                                <option value="4000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '4000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '4000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '4000' ? 'selected':'' }}
                                                    @endif
                                                >RM 4,000.00</option>
                                                <option value="5000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '5000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '5000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '5000' ? 'selected':'' }}
                                                    @endif
                                                >RM 5,000.00</option>
                                                <option value="6000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '6000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '6000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '6000' ? 'selected':'' }}
                                                    @endif
                                                >RM 6,000.00</option>
                                                <option value="7000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '7000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '7000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '7000' ? 'selected':'' }}
                                                    @endif
                                                >RM 7,000.00</option>
                                                <option value="8000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '8000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '8000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '8000' ? 'selected':'' }}
                                                    @endif
                                                >RM 8,000.00</option>
                                                <option value="9000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '9000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '9000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '9000' ? 'selected':'' }}
                                                    @endif
                                                >RM 9,000.00</option>
                                                <option value="10000"
                                                    @if(isset(auth()->user()->pinjaman->purchase_price))
                                                        @if(auth()->user()->pinjaman->purchase_price == '10000')
                                                            selected
                                                        @else
                                                            {{ old('purchase_price') == '10000' ? 'selected':'' }}
                                                        @endif
                                                    @else
                                                        {{ old('purchase_price') == '10000' ? 'selected':'' }}
                                                    @endif
                                                >RM 10,000.00</option>
                                        </select>

                                    @error('purchase_price')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="duration"
                                        class="block text-sm font-medium leading-5 text-gray-700">Tempoh Pembayaran
                                        <span class="text-red-700">*</span></label>
                                    <select id="duration" name="duration"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Tempoh Pembayaran</option>
                                        <option value="12"
                                            @if(isset(auth()->user()->pinjaman->duration))
                                                @if(auth()->user()->pinjaman->duration == '12')
                                                    selected
                                                @else
                                                    {{ old('duration') == '12' ? 'selected':'' }}
                                                @endif
                                            @else
                                                {{ old('duration') == '12' ? 'selected':'' }}
                                            @endif
                                        >12 Bulan</option>
                                        <option value="24"
                                            @if(isset(auth()->user()->pinjaman->duration))
                                                @if(auth()->user()->pinjaman->duration == '24')
                                                    selected
                                                @else
                                                    {{ old('duration') == '24' ? 'selected':'' }}
                                                @endif
                                            @else
                                                {{ old('duration') == '24' ? 'selected':'' }}
                                            @endif
                                        >24 Bulan</option>
                                        <option value="36"
                                            @if(isset(auth()->user()->pinjaman->duration))
                                                @if(auth()->user()->pinjaman->duration == '36')
                                                    selected
                                                @else
                                                    {{ old('duration') == '36' ? 'selected':'' }}
                                                @endif
                                            @else
                                                {{ old('duration') == '36' ? 'selected':'' }}
                                            @endif
                                        >36 Bulan</option>
                                    </select>

                                    @error('duration')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Perujuk</h3>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6 mt-1">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="reference_name"
                                        class="block text-sm font-medium leading-5 text-gray-700">Nama <span
                                            class="text-red-700">*</span></label>
                                    <input id="reference_name" name="reference_name"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        value="{{ isset(auth()->user()->pinjaman->reference_name) ? auth()->user()->pinjaman->reference_name : old('reference_name') }}" />
                                    @error('reference_name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6">
                                    <label for="reference_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat <span
                                            class="text-red-700">*</span></label>
                                    <input id="reference_address1" name="reference_address1"
                                        value="{{ isset(auth()->user()->pinjaman->reference_address1) ? auth()->user()->pinjaman->reference_address1 : old('reference_address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_address1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror


                                    <input id="reference_address2" name="reference_address2"
                                        value="{{ isset(auth()->user()->pinjaman->reference_address2) ? auth()->user()->pinjaman->reference_address2 : old('reference_address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_address2')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="reference_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod <span
                                            class="text-red-700">*</span></label>
                                    <input id="reference_postcode" name="reference_postcode" minlength="5" maxlength="5"
                                        value="{{ isset(auth()->user()->pinjaman->reference_postcode) ? auth()->user()->pinjaman->reference_postcode : old('reference_postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_postcode')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="reference_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar <span
                                            class="text-red-700">*</span></label>
                                    <input id="reference_city" name="reference_city"
                                        value="{{ isset(auth()->user()->pinjaman->reference_city) ? auth()->user()->pinjaman->reference_city : old('reference_city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_city')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="reference_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri <span
                                            class="text-red-700">*</span></label>
                                    <select id="reference_state" name="reference_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Negeri</option>
                                        @foreach($negerix as $negerix5)
                                        <option value="{{ $negerix5->kodnegeri }}" @if(isset(auth()->
                                            user()->pinjaman->reference_state))
                                            @if(auth()->user()->pinjaman->reference_state == $negerix5->kodnegeri)
                                            selected
                                            @else
                                            {{ old('reference_state') == ($negerix5->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('reference_state') == ($negerix5->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negerix5->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                    @error('reference_state')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="reference_relation"
                                        class="block text-sm font-medium leading-5 text-gray-700">Hubungan Dengan
                                        Pemohon <span class="text-red-700">*</span></label>
                                    <input id="reference_relation" name="reference_relation"
                                        value="{{ isset(auth()->user()->pinjaman->reference_relation) ? auth()->user()->pinjaman->reference_relation : old('reference_relation') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_relation')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="reference_phone"
                                        class="block text-sm font-medium leading-5 text-gray-700">No Telefon - cth (0123456789) <span class="text-red-700">*</span></label>
                                    <input id="reference_phone" name="reference_phone"
                                        value="{{ isset(auth()->user()->pinjaman->reference_phone) ? auth()->user()->pinjaman->reference_phone : old('reference_phone') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('reference_phone')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Dokumen Sokongan</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                            Panduan menukar gambar jenis "JPG" kepada PDF
                        </p>
                        <span class="inline-flex rounded-md shadow-sm">
                            <a href="{{ secure_asset('public/img') }}/cbrm/pdf_convert.pdf" target="_blank" type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Klik sini
                            </a>
                        </span>
                        <p class="mt-3 text-sm leading-5 text-gray-500">
                            Link Website
                        </p>
                        <span class="inline-flex rounded-md shadow-sm">
                            <a href="https://jpg2pdf.com/" target="_blank" type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Klik sini
                            </a>
                        </span>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            {{-- kad pengenalan --}}
                            @include('upload.ic')

                            @if(isset(auth()->user()->peribadi->marital) && auth()->user()->peribadi->marital == 'Berkahwin')
                                {{-- kad pengenalan pasangan--}}
                                @include('upload.ic_partner')
                            @endif

                            {{-- ssm --}}
                            @include('upload.ssm')
                            {{-- bank --}}
                            @include('upload.bank')
                            {{-- bank company --}}
                            @include('upload.bank_comp')
                            {{-- utility --}}
                            @include('upload.utility')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            <span class="inline-flex rounded-md shadow-sm">
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition ease-in-out duration-150">
                    {{--add this to disable button: opacity-50 cursor-not-allowed --}}
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Simpan
                </button>
            </span>
        </div>
    </form>
</div>

@push('js')
<script>
    $("#ic-div1").click(function (event) {
        if (!$(event.target).is('#ic1')) {
            $(this).find("#ic1").trigger('click');
        }
    });

    $("input[id='ic1']").on('change', function () {
        icreadURL(this);
        iccheckFiles();
    });

    var iccheckFiles = function () {
        if (document.getElementById("ic1").files.length > 0) {
            $('#ic-uploaded-div1').css('display', 'block');
            $('#ic-div1').css('display', 'none');
        } else {
            $('#ic-uploaded-div1').css('display', 'none');
            $('#ic-div1').css('display', 'block');
        }
    }

    var icreadURL = function (input) {
        var fullPath = document.getElementById('ic1').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("ic-uploaded1").textContent = filename;
        }
    }

    function icDelFile1() {
        $("#ic1").val('');
        $('#ic-uploaded-div1').css('display', 'none');
        $('#ic-div1').css('display', 'block');
    }

    function deleteKP(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('sptp-deleteKP')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('sptp')}}";
            }
        });
    }

</script>
<script>
    $("#ic-div2").click(function (event) {
        if (!$(event.target).is('#ic2')) {
            $(this).find("#ic2").trigger('click');
        }
    });

    $("input[id='ic2']").on('change', function () {
        icreadURL2(this);
        iccheckFiles2();
    });

    var iccheckFiles2 = function () {
        if (document.getElementById("ic2").files.length > 0) {
            $('#ic-uploaded-div2').css('display', 'block');
            $('#ic-div2').css('display', 'none');
        } else {
            $('#ic-uploaded-div2').css('display', 'none');
            $('#ic-div2').css('display', 'block');
        }
    }

    var icreadURL2 = function (input) {
        var fullPath = document.getElementById('ic2').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("ic-uploaded2").textContent = filename;
        }
    }

    function icDelFile2() {
        $("#ic2").val('');
        $('#ic-uploaded-div2').css('display', 'none');
        $('#ic-div2').css('display', 'block');
    }

</script>

<script>
    $("#icP-div1").click(function (event) {
        if (!$(event.target).is('#icP1')) {
            $(this).find("#icP1").trigger('click');
        }
    });

    $("input[id='icP1']").on('change', function () {
        icPreadURL(this);
        icPcheckFiles();
    });

    var icPcheckFiles = function () {
        if (document.getElementById("icP1").files.length > 0) {
            $('#icP-uploaded-div1').css('display', 'block');
            $('#icP-div1').css('display', 'none');
        } else {
            $('#icP-uploaded-div1').css('display', 'none');
            $('#icP-div1').css('display', 'block');
        }
    }

    var icPreadURL = function (input) {
        var fullPath = document.getElementById('icP1').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("icP-uploaded1").textContent = filename;
        }
    }

    function icPDelFile1() {
        $("#icP1").val('');
        $('#icP-uploaded-div1').css('display', 'none');
        $('#icP-div1').css('display', 'block');
    }

    function deleteKPP(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('sptp-deleteKPP')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('sptp')}}";
            }
        });
    }

</script>
<script>
    $("#icP-div2").click(function (event) {
        if (!$(event.target).is('#icP2')) {
            $(this).find("#icP2").trigger('click');
        }
    });

    $("input[id='icP2']").on('change', function () {
        icPreadURL2(this);
        icPcheckFiles2();
    });

    var icPcheckFiles2 = function () {
        if (document.getElementById("icP2").files.length > 0) {
            $('#icP-uploaded-div2').css('display', 'block');
            $('#icP-div2').css('display', 'none');
        } else {
            $('#icP-uploaded-div2').css('display', 'none');
            $('#icP-div2').css('display', 'block');
        }
    }

    var icPreadURL2 = function (input) {
        var fullPath = document.getElementById('icP2').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("icP-uploaded2").textContent = filename;
        }
    }

    function icPDelFile2() {
        $("#icP2").val('');
        $('#icP-uploaded-div2').css('display', 'none');
        $('#icP-div2').css('display', 'block');
    }

</script>
<script>
    $("#ssm-div").click(function (event) {
        if (!$(event.target).is('#ssm')) {
            $(this).find("#ssm").trigger('click');
        }
    });

    $("input[id='ssm']").on('change', function () {
        ssmreadURL(this);
        ssmcheckFiles();
    });

    var ssmcheckFiles = function () {
        if (document.getElementById("ssm").files.length > 0) {
            $('#ssm-uploaded-div').css('display', 'block');
            $('#ssm-div').css('display', 'none');
        } else {
            $('#ssm-uploaded-div').css('display', 'none');
            $('#ssm-div').css('display', 'block');
        }
    }

    var ssmreadURL = function (input) {
        var fullPath = document.getElementById('ssm').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("ssm-uploaded").textContent = filename;
        }
    }

    function ssmDelFile() {
        $("#ssm").val('');
        $('#ssm-uploaded-div').css('display', 'none');
        $('#ssm-div').css('display', 'block');
    }

    function deleteSSM(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('sptp-deleteSSM')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('sptp')}}";
            }
        });
    }

</script>
<script>
    $("#bank-div").click(function (event) {
        if (!$(event.target).is('#bank')) {
            $(this).find("#bank").trigger('click');
        }
    });

    $("input[id='bank']").on('change', function () {
        bankreadURL(this);
        bankcheckFiles();
    });

    var bankcheckFiles = function () {
        if (document.getElementById("bank").files.length > 0) {
            $('#bank-uploaded-div').css('display', 'block');
            $('#bank-div').css('display', 'none');
        } else {
            $('#bank-uploaded-div').css('display', 'none');
            $('#bank-div').css('display', 'block');
        }
    }

    var bankreadURL = function (input) {
        var fullPath = document.getElementById('bank').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("bank-uploaded").textContent = filename;
        }
    }

    function bankDelFile() {
        $("#bank").val('');
        $('#bank-uploaded-div').css('display', 'none');
        $('#bank-div').css('display', 'block');
    }

    function deleteBank(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('sptp-deleteBank')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('sptp')}}";
            }
        });
    }

</script>
<script>
    $("#bank_comp-div").click(function (event) {
        if (!$(event.target).is('#bank_comp')) {
            $(this).find("#bank_comp").trigger('click');
        }
    });

    $("input[id='bank_comp']").on('change', function () {
        bankcompreadURL(this);
        bankcompcheckFiles();
    });

    var bankcompcheckFiles = function () {
        if (document.getElementById("bank_comp").files.length > 0) {
            $('#bank_comp-uploaded-div').css('display', 'block');
            $('#bank_comp-div').css('display', 'none');
        } else {
            $('#bank_comp-uploaded-div').css('display', 'none');
            $('#bank_comp-div').css('display', 'block');
        }
    }

    var bankcompreadURL = function (input) {
        var fullPath = document.getElementById('bank_comp').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("bank_comp-uploaded").textContent = filename;
        }
    }

    function bankCompDelFile() {
        $("#bank_comp").val('');
        $('#bank_comp-uploaded-div').css('display', 'none');
        $('#bank_comp-div').css('display', 'block');
    }

    function deleteBankComp(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('sptp-deleteBankComp')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('sptp')}}";
            }
        });
    }

</script>
<script>
    $("#bil-div").click(function (event) {
        if (!$(event.target).is('#bil')) {
            $(this).find("#bil").trigger('click');
        }
    });

    $("input[id='bil']").on('change', function () {
        bilreadURL(this);
        bilcheckFiles();
    });

    var bilcheckFiles = function () {
        if (document.getElementById("bil").files.length > 0) {
            $('#bil-uploaded-div').css('display', 'block');
            $('#bil-div').css('display', 'none');
        } else {
            $('#bil-uploaded-div').css('display', 'none');
            $('#bil-div').css('display', 'block');
        }
    }

    var bilreadURL = function (input) {
        var fullPath = document.getElementById('bil').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("bil-uploaded").textContent = filename;
        }
    }

    function bilDelFile() {
        $("#bil").val('');
        $('#bil-uploaded-div').css('display', 'none');
        $('#bil-div').css('display', 'block');
    }

    function deleteBil(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('sptp-deleteBil')}}" + '/' + id,
            data: {
                '_token': CSRF_TOKEN,
                '_method': 'DELETE'
            },
            success: function () {
                window.location = "{{ url('sptp')}}";
            }
        });
    }

</script>

<script>
    $(document).ready(function () {
        @error('purchase_price')
        $("#purchase_price").addClass("border-red-500");
        @enderror

        @error('duration')
        $("#duration").addClass("border-red-500");
        @enderror

        @error('reference_name')
        $("#reference_name").addClass("border-red-500");
        @enderror

        @error('reference_address1')
        $("#reference_address1").addClass("border-red-500");
        @enderror

        @error('reference_address2')
        $("#reference_address2").addClass("border-red-500");
        @enderror

        @error('reference_postcode')
        $("#reference_postcode").addClass("border-red-500");
        @enderror

        @error('reference_city')
        $("#reference_city").addClass("border-red-500");
        @enderror

        @error('reference_state')
        $("#reference_state").addClass("border-red-500");
        @enderror

        @error('reference_relation')
        $("#reference_relation").addClass("border-red-500");
        @enderror

        @error('reference_phone')
        $("#reference_phone").addClass("border-red-500");
        @enderror
    });

</script>
@endpush