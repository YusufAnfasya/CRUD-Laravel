<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>FORM REKAM MEDIS</h1>
                    <form action="rekam">
                        <p>
                            <label>Nama Pasien</label>
                            <input type="text" name="nama_pasien" placeholder="Nama Pasien">
                        </p>
                        <p>
                            <label>Name Dokter</label>
                            <input type="text" name="nama_pasien" placeholder="Nama Pasien">
                        </p>
                        <p>
                            <label>Kondisi</label>
                            <input type="text" name="nama_pasien" placeholder="Nama Pasien">
                        </p>
                        <p>
                            <label>Suhu tubuh</label>
                            <input type="text" name="nama_pasien" placeholder="Nama Pasien">
                        </p>
                        <p>
                            <label> Upload FOTO</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </p>
                        <p>
                            <input type="submit" name="submit" value="Daftar Rekam Medis" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
