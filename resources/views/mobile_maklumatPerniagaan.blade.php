<div x-show="tab === 'tab2'">
    <form method="post" action="{{ route('mobile.storePerniagaan') }}" enctype="multipart/form-data"
    @if ($errors->any())
        @if ($errors->has('business_modal'))
        x-data="{ tabs: 'Sendirian Berhad' }"
        @elseif(
        $errors->has('partner_name') ||
        $errors->has('partner_ic') ||
        $errors->has('partner_address1') ||
        $errors->has('partner_postcode') ||
        $errors->has('partner_city') ||
        $errors->has('partner_state')
        )
        x-data="{ tabs: 'Perkongsian' }"
        @else
        x-data="{ tabs: ''}"
        @endif
        @else
        @if(is_null(auth()->user()->perniagaan))
        x-data="{ tabs: '' }"
        @else
        @if(auth()->user()->perniagaan->business_ownership === 'Sendirian Berhad')
        x-data="{ tabs: 'Sendirian Berhad' }"
        @elseif(auth()->user()->perniagaan->business_ownership === 'Perkongsian')
        x-data="{ tabs: 'Perkongsian' }"
        @elseif(auth()->user()->perniagaan->business_ownership === 'Individu')
        x-data="{ tabs: '' }"
        @elseif(auth()->user()->perniagaan->business_ownership === 'Pemilikan Tunggal')
        x-data="{ tabs: '' }"
        @endif
        @endif
        @endif
        >
        @csrf

        <div class="my-8 px-4">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Perniagaan</h3>
                        {{-- <p class="mt-1 text-sm leading-5 text-gray-500">
                        This information will be displayed publicly so be careful what you share.
                        </p> --}}
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="business_name"
                                        class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        Perniagaan/Syarikat <span class="text-red-700">*</span></label>
                                    <input id="business_name" name="business_name"
                                        value="{{ isset(auth()->user()->perniagaan->business_name) ? auth()->user()->perniagaan->business_name : old('business_name') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('business_name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="business_no"
                                        class="block text-sm font-medium leading-5 text-gray-700">No
                                        Lesen/Daftar Perniagaan <span class="text-red-700">*</span></label>
                                    <input id="business_no" name="business_no"
                                        value="{{ isset(auth()->user()->perniagaan->business_no) ? auth()->user()->perniagaan->business_no : old('business_no') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('business_no')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="business_sector"
                                        class="block text-sm font-medium leading-5 text-gray-700">Sektor Perniagaan
                                        <span class="text-red-700">*</span></label>
                                    <select id="business_sector" name="business_sector"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Sektor Perniagaan</option>
                                        @foreach($sektor as $sektors)
                                        <option value="{{ $sektors->idPerniagaan }}" @if(isset(auth()->
                                            user()->perniagaan->business_sector))
                                            @if(auth()->user()->perniagaan->business_sector == $sektors->idPerniagaan)
                                            selected
                                            @else
                                            {{ old('business_sector') == ($sektors->idPerniagaan) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('business_sector') == ($sektors->idPerniagaan) ? 'selected':'' }}
                                            @endif
                                            >{{ $sektors->jenisPerniagaan }}</option>
                                        @endforeach
                                    </select>
                                    @error('business_sector')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="business_activity"
                                        class="block text-sm font-medium leading-5 text-gray-700">Aktiviti
                                        Perniagaan/Projek
                                        <span class="text-red-700">*</span></label>
                                    <select id="business_activity" name="business_activity"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Aktiviti Perniagaan</option>
                                        @foreach($aktiviti as $aktivitis)
                                        <option value="{{ $aktivitis->idAktiviti }}" @if(isset(auth()->
                                            user()->perniagaan->business_activity))
                                            @if(auth()->user()->perniagaan->business_activity == $aktivitis->idAktiviti)
                                            selected
                                            @else
                                            {{ old('business_activity') == ($aktivitis->idAktiviti) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('business_activity') == ($aktivitis->idAktiviti) ? 'selected':'' }}
                                            @endif
                                            >{{ $aktivitis->Aktiviti }}</option>
                                        @endforeach
                                    </select>
                                    @error('business_activity')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="business_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat
                                        Perniagaan/Permis/Projek <span class="text-red-700">*</span></label>
                                    <input id="business_address1" name="business_address1"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        value="{{ isset(auth()->user()->perniagaan->business_address1) ? auth()->user()->perniagaan->business_address1 : old('business_address1') }}" />
                                    @error('business_address1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                    <input id="business_address2" name="business_address2"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        value="{{ isset(auth()->user()->perniagaan->business_address2) ? auth()->user()->perniagaan->business_address2 : old('business_address2') }}" />
                                    @error('business_address2')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="business_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod <span
                                            class="text-red-700">*</span></label>
                                    <input id="business_postcode" name="business_postcode" minlength="5" maxlength="5"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        value="{{ isset(auth()->user()->perniagaan->business_postcode) ? auth()->user()->perniagaan->business_postcode : old('business_postcode') }}" />
                                    @error('business_postcode')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="business_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar
                                        <span class="text-red-700">*</span></label>
                                    <input id="business_city" name="business_city"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        value="{{ isset(auth()->user()->perniagaan->business_city) ? auth()->user()->perniagaan->business_city : old('business_city') }}" />
                                    @error('business_city')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="business_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri
                                        <span class="text-red-700">*</span></label>
                                    <select id="business_state" name="business_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Negeri <span class="text-red-700">*</span></option>
                                        @foreach($negerix as $negerix4)
                                        <option value="{{ $negerix4->kodnegeri }}" @if(isset(auth()->
                                            user()->perniagaan->business_state))
                                            @if(auth()->user()->perniagaan->business_state == $negerix4->kodnegeri)
                                            selected
                                            @else
                                            {{ old('business_state') == ($negerix4->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('business_state') == ($negerix4->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negerix4->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                    @error('business_state')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="business_phone"
                                        class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon (Perniagaan)</label>
                                    <input id="business_phone" name="business_phone"
                                        value="{{ isset(auth()->user()->perniagaan->business_phone) ? auth()->user()->perniagaan->business_phone : old('business_phone') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('business_phone')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="business_phone_hp"
                                        class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon (HP) - cth (0123456789) <span class="text-red-700">*</span></label>
                                    <input id="business_phone_hp" name="business_phone_hp"
                                        value="{{ isset(auth()->user()->perniagaan->business_phone_hp) ? auth()->user()->perniagaan->business_phone_hp : old('business_phone_hp') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('business_phone_hp')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="business_premise"
                                        class="block text-sm font-medium leading-5 text-gray-700">Status Premis <span
                                            class="text-red-700">*</span></label>
                                    <select id="business_premise" name="business_premise"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih Status Premis</option>
                                        <option value="Sendiri" @if(isset(auth()->user()->perniagaan->business_premise))
                                            @if(auth()->user()->perniagaan->business_premise == 'Sendiri') selected
                                            @else {{ old('business_premise') == 'Sendiri' ? 'selected':'' }} @endif
                                            @else{{ old('business_premise') == 'Sendiri' ? 'selected':'' }}
                                            @endif>Sendiri</option>
                                        <option value="Sewa" @if(isset(auth()->user()->perniagaan->business_premise))
                                            @if(auth()->user()->perniagaan->business_premise == 'Sewa') selected
                                            @else {{ old('business_premise') == 'Sewa' ? 'selected':'' }} @endif
                                            @else{{ old('business_premise') == 'Sewa' ? 'selected':'' }}
                                            @endif>Sewa</option>
                                        <option value="Keluarga" @if(isset(auth()->
                                            user()->perniagaan->business_premise))
                                            @if(auth()->user()->perniagaan->business_premise == 'Keluarga') selected
                                            @else {{ old('business_premise') == 'Keluarga' ? 'selected':'' }} @endif
                                            @else{{ old('business_premise') == 'Keluarga' ? 'selected':'' }}
                                            @endif>Keluarga</option>
                                        <option value="Persatuan" @if(isset(auth()->
                                            user()->perniagaan->business_premise))
                                            @if(auth()->user()->perniagaan->business_premise == 'Persatuan') selected
                                            @else {{ old('business_premise') == 'Persatuan' ? 'selected':'' }} @endif
                                            @else{{ old('business_premise') == 'Persatuan' ? 'selected':'' }}
                                            @endif>Persatuan</option>
                                    </select>
                                    @error('business_premise')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="business_ownership"
                                        class="block text-sm font-medium leading-5 text-gray-700">Permilikan Perniagaan
                                        <span class="text-red-700">*</span></label>
                                    <select id="business_ownership" name="business_ownership"
                                        class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                        @change="tabs = $event.target.value">
                                        <option value="">Sila Pilih Permilikan Perniagaan</option>
                                        <option value="Individu" @if(isset(auth()->
                                            user()->perniagaan->business_ownership))
                                            @if(auth()->user()->perniagaan->business_ownership == 'Individu')
                                            selected
                                            @else
                                            {{ old('business_ownership') == 'Individu' ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('business_ownership') == 'Individu' ? 'selected':'' }}
                                            @endif
                                            x-bind:value="'Individu'">Individu</option>
                                        <option value="Pemilikan Tunggal" @if(isset(auth()->
                                            user()->perniagaan->business_ownership))
                                            @if(auth()->user()->perniagaan->business_ownership == 'Pemilikan Tunggal')
                                            selected
                                            @else
                                            {{ old('business_ownership') == 'Pemilikan Tunggal' ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('business_ownership') == 'Pemilikan Tunggal' ? 'selected':'' }}
                                            @endif
                                            x-bind:value="'Pemilikan Tunggal'"> Pemilikan Tunggal </option>
                                        <option value="Perkongsian" @if(isset(auth()->
                                            user()->perniagaan->business_ownership))
                                            @if(auth()->user()->perniagaan->business_ownership == 'Perkongsian')
                                            selected
                                            @else
                                            {{ old('business_ownership') == 'Perkongsian x-data="{ tabs: "Perkongsian" }"' ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('business_ownership') == 'Perkongsian' ? 'selected':'' }}
                                            @endif
                                            x-bind:value="'Perkongsian'"
                                            >Perkongsian </option>
                                        <option value="Sendirian Berhad" @if(isset(auth()->
                                            user()->perniagaan->business_ownership))
                                            @if(auth()->user()->perniagaan->business_ownership == 'Sendirian Berhad')
                                            selected
                                            @else
                                            {{ old('business_ownership') == 'Sendirian Berhad' ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('business_ownership') == 'Sendirian Berhad' ? 'selected':'' }}
                                            @endif
                                            x-bind:value="'Sendirian Berhad'"
                                            > Sendirian Berhad </option>
                                    </select>
                                    @error('business_ownership')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-2" x-show="tabs === 'Sendirian Berhad'">
                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="business_modal"
                                            class="block text-sm font-medium leading-5 text-gray-700">Modal
                                            Berbayar <span class="text-red-700">*</span></label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="text-gray-500 sm:text-sm sm:leading-5">
                                                    RM
                                                </span>
                                            </div>
                                            <input id="business_modal" name="business_modal" min="0"
                                                value="{{ isset(auth()->user()->perniagaan->business_modal) ? auth()->user()->perniagaan->business_modal : old('business_modal') }}"
                                                type="number" step="0.01"
                                                class="mt-1 form-input block w-full pl-16 sm:pl-14 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>
                                        @error('business_modal')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-6">
                                    <label class="block text-sm font-medium leading-5 text-gray-700">Masa
                                        Berniaga</label>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                    <label for="business_open"
                                        class="block text-sm font-medium leading-5 text-gray-700">Dari
                                        <span class="text-red-700">*</span></label>
                                    <input id="business_open" name="business_open" type="time"
                                        value="{{ isset(auth()->user()->perniagaan->business_open) ? auth()->user()->perniagaan->business_open : old('business_open') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('business_open')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                    <label for="business_closed"
                                        class="block text-sm font-medium leading-5 text-gray-700">hingga <span
                                            class="text-red-700">*</span></label>
                                    <input id="business_closed" name="business_closed" type="time"
                                        value="{{ isset(auth()->user()->perniagaan->business_closed) ? auth()->user()->perniagaan->business_closed : old('business_closed') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('business_closed')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>


                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block text-sm font-medium leading-5 text-gray-700">Anggaran Pendapatan
                                        Kasar
                                        (Sebulan) <span class="text-red-700">*</span></label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm sm:leading-5">
                                                RM
                                            </span>
                                        </div>
                                        <input id="business_income" name="business_income" min="0"
                                            value="{{ isset(auth()->user()->perniagaan->business_income) ? auth()->user()->perniagaan->business_income : old('business_income') }}"
                                            type="number" step="0.01"
                                            class="mt-1 form-input block w-full pl-16 sm:pl-14 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('business_income')
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

        <div class="hidden sm:block" x-show="tabs === 'Perkongsian' || tabs === 'Sendirian Berhad'">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="my-8 px-4" x-show="tabs === 'Perkongsian' || tabs === 'Sendirian Berhad'">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Maklumat Rakan Kongsi/Pengarah</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                            Selain daripada maklumat pemohon
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6 mt-1">

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="partner_name"
                                        class="block text-sm font-medium leading-5 text-gray-700">Nama
                                        <span class="text-red-700">*</span></label>
                                    <input id="partner_name" name="partner_name"
                                        value="{{ isset(auth()->user()->perniagaan->partner_name) ? auth()->user()->perniagaan->partner_name : old('partner_name') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('partner_name')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="partner_ic"
                                        class="block text-sm font-medium leading-5 text-gray-700">No. KP
                                        (Baru) - cth (900000010000) <span class="text-red-700">*</span></label>
                                    <input id="partner_ic" name="partner_ic"
                                        value="{{ isset(auth()->user()->perniagaan->partner_ic) ? auth()->user()->perniagaan->partner_ic : old('partner_ic') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('partner_ic')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="partner_address1"
                                        class="block text-sm font-medium leading-5 text-gray-700">Alamat <span
                                            class="text-red-700">*</span></label>
                                    <input id="partner_address1" name="partner_address1"
                                        value="{{ isset(auth()->user()->perniagaan->partner_address1) ? auth()->user()->perniagaan->partner_address1 : old('partner_address1') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('partner_address1')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror

                                    <input id="partner_address2" name="partner_address2"
                                        value="{{ isset(auth()->user()->perniagaan->partner_address2) ? auth()->user()->perniagaan->partner_address2 : old('partner_address2') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('partner_address2')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="partner_postcode"
                                        class="block text-sm font-medium leading-5 text-gray-700">Poskod <span
                                            class="text-red-700">*</span></label>
                                    <input id="partner_postcode" name="partner_postcode" maxlength="5"
                                        value="{{ isset(auth()->user()->perniagaan->partner_postcode) ? auth()->user()->perniagaan->partner_postcode : old('partner_postcode') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('partner_postcode')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="partner_city"
                                        class="block text-sm font-medium leading-5 text-gray-700">Bandar
                                        <span class="text-red-700">*</span></label>
                                    <input id="partner_city" name="partner_city"
                                        value="{{ isset(auth()->user()->perniagaan->partner_city) ? auth()->user()->perniagaan->partner_city : old('partner_city') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('partner_city')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="partner_state"
                                        class="block text-sm font-medium leading-5 text-gray-700">Negeri
                                        <span class="text-red-700">*</span></label>
                                    <select id="partner_state" name="partner_state"
                                        class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="">Sila Pilih</option>
                                        @foreach($negerix as $negerix3)
                                        <option value="{{ $negerix3->kodnegeri }}" @if(isset(auth()->
                                            user()->perniagaan->partner_state))
                                            @if(auth()->user()->perniagaan->partner_state == $negerix3->kodnegeri)
                                            selected
                                            @else
                                            {{ old('partner_state') == ($negerix3->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            @else
                                            {{ old('partner_state') == ($negerix3->kodnegeri) ? 'selected':'' }}
                                            @endif
                                            >{{ $negerix3->namanegeri }}</option>
                                        @endforeach
                                    </select>
                                    @error('partner_state')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="partner_phone"
                                        class="block text-sm font-medium leading-5 text-gray-700">No
                                        Telefon (Rumah)</label>
                                    <input id="partner_phone" name="partner_phone"
                                        value="{{ isset(auth()->user()->perniagaan->partner_phone) ? auth()->user()->perniagaan->partner_phone : old('partner_phone') }}"
                                        class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    @error('partner_phone')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                @include('upload.rakan_kongsi')
                            </div>
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
    $("#rk-div").click(function (event) {
        if (!$(event.target).is('#rk')) {
            $(this).find("#rk").trigger('click');
        }
    });

    $("input[id='rk']").on('change', function () {
        rkreadURL(this);
        rkcheckFiles();
    });

    var rkcheckFiles = function () {
        if (document.getElementById("rk").files.length > 0) {
            $('#rk-uploaded-div').css('display', 'block');
            $('#rk-div').css('display', 'none');
        } else {
            $('#rk-uploaded-div').css('display', 'none');
            $('#rk-div').css('display', 'block');
        }
    }

    var rkreadURL = function (input) {
        var fullPath = document.getElementById('rk').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById("rk-uploaded").textContent = filename;
        }
    }

    function rkDelFile() {
        $("#rk").val('');
        $('#rk-uploaded-div').css('display', 'none');
        $('#rk-div').css('display', 'block');
    }

    function deleteRK(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: "{{ url('sptp-deleteRK')}}" + '/' + id,
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

        $('select[name=business_sector]').on('change', function () {
            var selected = $(this).find(":selected").attr('value');
            $.ajax({
                url: "{{ route('mobile.getAktiviti') }}?sektor=" + selected,
                method: 'GET',
                success: function(data) {
                    $('#business_activity').html(data.html);
                }
            });
        });

        @error('business_name')
        $("#business_name").addClass("border-red-500");
        @enderror

        @error('business_name')
        $("#business_name").addClass("border-red-500");
        @enderror

        @error('business_sector')
        $("#business_sector").addClass("border-red-500");
        @enderror

        @error('business_activity')
        $("#business_activity").addClass("border-red-500");
        @enderror

        @error('business_address1')
        $("#business_address1").addClass("border-red-500");
        @enderror

        @error('business_address2')
        $("#business_address2").addClass("border-red-500");
        @enderror

        @error('business_postcode')
        $("#business_postcode").addClass("border-red-500");
        @enderror

        @error('business_city')
        $("#business_city").addClass("border-red-500");
        @enderror

        @error('business_state')
        $("#business_state").addClass("border-red-500");
        @enderror

        @error('business_phone')
        $("#business_phone").addClass("border-red-500");
        @enderror

        @error('business_phone_hp')
        $("#business_phone_hp").addClass("border-red-500");
        @enderror

        @error('business_premise')
        $("#business_premise").addClass("border-red-500");
        @enderror

        @error('business_ownership')
        $("#business_ownership").addClass("border-red-500");
        @enderror

        @error('business_modal')
        $("#business_modal").addClass("border-red-500");
        @enderror

        @error('business_open')
        $("#business_open").addClass("border-red-500");
        @enderror

        @error('business_closed')
        $("#business_closed").addClass("border-red-500");
        @enderror

        @error('business_income')
        $("#business_income").addClass("border-red-500");
        @enderror

        @error('partner_name')
        $("#partner_name").addClass("border-red-500");
        @enderror

        @error('partner_ic')
        $("#partner_ic").addClass("border-red-500");
        @enderror

        @error('partner_address1')
        $("#partner_address1").addClass("border-red-500");
        @enderror

        @error('partner_postcode')
        $("#partner_postcode").addClass("border-red-500");
        @enderror

        @error('partner_city')
        $("#partner_city").addClass("border-red-500");
        @enderror

        @error('partner_state')
        $("#partner_state").addClass("border-red-500");
        @enderror
    });

</script>
@endpush