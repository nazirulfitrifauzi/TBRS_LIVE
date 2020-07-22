@extends('layouts.app')

@push('js_head')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
@endpush

@section('content')
<div>
    <div class="bg-gray-800 pb-32">
        <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
                <div class="border-b border-gray-700">
                    <div class="flex items-center justify-between h-16 px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-16 w-16" src="{{ secure_asset('public/img') }}/logo_tekun.png" />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline">
                                    <a href="#"
                                        class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">
                                        Laman Utama
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto ">
                            <div class="items-baseline">
                                <a href="#"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">
                                    {{ substr(auth()->user()->ic_no,0,6) }}-{{ substr(auth()->user()->ic_no,6,2) }}-{{ substr(auth()->user()->ic_no,8,4) }}
                                </a>
                            </div>
                        </div>
                        <div class="block ml-2">
                            <span class="inline-flex rounded-md shadow-sm">
                                <a href="{{ route('logout') }}" type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                                    onclick="event.preventDefault();getElementById('logout-form').submit();">
                                    <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                                            clip-rule="evenodd">
                                    </svg>
                                    Log Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <header class="py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
                <h1 class="text-3xl leading-9 font-bold text-white">
                    TEKUN BUSINESS RECOVERY SCHEME (TBRS)
                </h1>
            </div>
        </header>
    </div>

    <main class="-mt-32">
        <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-20">
            <!-- Replace with your content -->
            <div class="bg-gray-100 rounded-lg shadow px-5 py-6 sm:px-6">
                <div>
                    {{-- card content --}}
                    <div class="grid grid-cols-1">
                        <!-- card mobilepreneur -->
                        <div class="sm:ml-3 sm:mt-0 mt-8 bg-white shadow overflow-hidden  sm:rounded-lg">
                            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                                <div class="flex">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        TBRS
                                    </h3>
                                    <a href="{{ route('mobile') }}" type="button"
                                        class="ml-auto inline-flex items-center px-2 py-2 border border-transparent text-xs leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition ease-in-out duration-150 sm:text-base">
                                        <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                        Mohon Sekarang
                                    </a>
                                </div>
                                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                                    Skim Pembiayaan Mikro TEKUN PENJANA.
                                </p>
                            </div>
                            <div class="px-4 py-5 sm:px-6">
                                <dl class="grid grid-cols-1 col-gap-4 row-gap-8 sm:grid-cols-2">
                                    <div class="sm:col-span-2">
                                        <dt class="mt-1 text-sm leading-5 text-gray-900">
                                            Skim Pembiayaan
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Pembiayaan modal diberikan kepada usahawan TEKUN sedia ada atau usahawan baru bagi memulihkan semula perniagaan sedia ada.
                                        </dd>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Nilai Pembiayaan
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Nilai Pembiayaan yang akan disalurkan adalah sehingga <b>RM10,000</b>
                                            bagi setiap usahawan mengikut kelayakan serta tertakluk kepada terma dan
                                            syarat-syarat asas TEKUN Nasional.
                                        </dd>
                                    </div>
									<div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Tempoh Pembiayaan
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Tempoh bayaran balik pembiayaan adalah sehingga <b>3 tahun</b>.
                                        </dd>
                                    </div>
									<div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Kadar Keuntungan
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Usahawan diminta membayar kadar keuntungan sebanyak <b>3.5%</b> daripada nilai pembiayaan setiap tahun sepanjang tempoh pembiayaan. Kadar keuntungan ini hendaklah dibuat bersama dengan bayaran balik pembiayaan.
                                        </dd>
                                    </div>
									<div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Tempoh Penangguhan
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Tempoh penangguhan selama 6 bulan.
                                        </dd>
                                    </div>
									<div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Yuran Proses
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            <table class="border-collapse table-auto w-1/3 whitespace-no-wrap bg-white table-striped relative">
												<thead>
													<tr class="text-center">
														<th>Pembiayaan</th>
														<th>Yuran Proses</th>
													</tr>
												</thead>
												<tbody class="text-center">
													<tr>
														<td class="border-dashed border-t border-gray-200">RM 1,000 - RM 2,000</td>
														<td class="border-dashed border-t border-gray-200">RM 20</td>
													</tr>
													<tr>
														<td class="border-dashed border-t border-gray-200">RM 2,001 - RM 5,000</td>
														<td class="border-dashed border-t border-gray-200">RM 50</td>
													</tr>
													<tr>
														<td class="border-dashed border-t border-gray-200">RM 5,001 - RM 10,000</td>
														<td class="border-dashed border-t border-gray-200">RM 100</td>
													</tr>
												</tbody>
											</table>
                                        </dd>
                                    </div>
									<div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Insuran Berkelompok
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Setiap usahawan yang terlibat diwajibkan untuk mendapatkan perlindungan kredit Takaful yang ditetapkan oleh TEKUN Nasional.
                                        </dd>
                                    </div>
									<div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Pendahuluan Bayaran Balik (Advance Payment)
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            Pemohon yang mendapat pembiayaan dibawah program ini diberikan <b>pengecualian potongan Pendahuluan Bayaran Balik (Advance Payment)</b> sebanyak 1 bulan bayaran daripada pembiayaan yang diluluskan. 
                                        </dd>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <dt class="text-sm leading-5 text-gray-900">
                                            Syarat-syarat Asas Pembiayaan TBRS adalah sama seperti syarat pembiayaan
                                            yang sedia ada seperti berikut:
                                        </dt>
                                        <dd class="text-sm leading-5 font-medium text-gray-500">
                                            <table>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Warganegara Malaysia (Bumiputera / India).</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Berumur 18-60 tahun (Tempoh pembiayaan tamat sehingga 65 tahun).
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Pemohon bukan seorang yang muflis.</td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>Terlibat secara langsung atau separuh masa dalam aktiviti perniagaan.</td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>Mempunyai daftar perniagaan (SSM), lesen penjaja/permit yang sah daripada PBT atau surat pengesahan perniagaan..</td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>Terlibat secara langsung atau separuh masa dalam aktiviti perniagaan.</td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td>Bebas daripada sebarang tindakan kebankrapan.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td>Syarikat Sdn. Bhd. dengan had modal berbayar tidak melebihi RM 300,000.</td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>Baki pembiayaan sedia ada dengan TEKUN Nasional tidak melebihi RM 100,000.</td>
                                                </tr>
                                            </table>
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                    {{-- end content --}}
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>
@endsection