@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Detail Customer</h2>
        <div class="mb-4">
            <label for="nama_customer" class="block text-sm font-medium text-gray-700">Nama customer</label>
            <input type="text" id="nama_customer" name="nama_customer" value="{{ $customer->nama_customer }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
            <input type="text" id="alamat" name="alamat" value="{{ $customer->alamat }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="jk" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
            <input type="text" id="jk" name="jk" value="{{ $customer->jk }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="flex justify-end">
            <a href="{{ route('customer.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

