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
 




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Barcode</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
</head>


<h1>Scan Barcode</h1>



<form method="POST" action="{{ route('processBarcode') }}">
    @csrf
    <label for="barcode">Scanned Barcode:</label>
    <input type="text" id="barcode" name="barcode" readonly>
    <button type="submit">Submit</button>
</form>

<div id="barcodeScanner" style="width: 100%; height: 300px;"></div>


<script type="text/javascript">
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#barcodeScanner'),
                constraints: {
                    facingMode: "environment" // Use back camera on mobile devices
                }
            },
            decoder: {
                readers: ["code_128_reader"] // Adjust this to match your barcode type
            }
        }, function (err) {
            if (err) {
                console.error(err);
                alert('Error initializing camera. Please check your camera permissions.');
                return;
            }
            console.log("QuaggaJS initialized");
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            const barcode = data.codeResult.code;
            document.querySelector('#barcode').value = barcode;
        });
    } else {
        alert('Camera is not supported on this device or browser.');
    }
</script>






















</div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
