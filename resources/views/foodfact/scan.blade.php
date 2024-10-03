<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

        </h2>
    </x-slot>
<BR>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-gray-100">
                   
<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>

<div class="container">
<div id="barcodeScanner" style="width: 100%; height: 300px;"></div>
<form method="POST" action="{{ route('processBarcode') }}">
    @csrf
    <label for="barcode">Scanned Barcode:</label>
    <input type="text" id="barcode" name="barcode" readonly>
    <button type="submit">Submit</button>
</form>

<script type="text/javascript">
    Quagga.init({
        inputStream: {
            name: "Live",
            type: "LiveStream",
            target: document.querySelector('#barcodeScanner'), // The div for the camera preview
            constraints: {
                facingMode: "environment" // Use the back camera on mobile devices
            }
        },
        decoder: {
            readers: ["code_128_reader"] // Specify the barcode format (e.g., code 128)
        }
    }, function (err) {
        if (err) {
            console.error(err);
            return;
        }
        console.log("QuaggaJS initialized");
        Quagga.start(); // Start the scanner
    });

    Quagga.onDetected(function (data) {
        const barcode = data.codeResult.code;
        console.log(barcode);

        // Set the scanned barcode value into the input field
        document.querySelector('#barcode').value = barcode;

        // Optionally, submit the form automatically after scanning
        // document.querySelector('form').submit();
    });
</script>






</div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
