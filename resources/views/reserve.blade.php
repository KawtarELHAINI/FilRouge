@extends('layout')
@include('partials.navbar')
<body >
<div class="bg-gradient-to-r from-yellow-400 to-yellow-600">

<div class="container mx-auto py-12">
    <form id="reservationForm" action="{{ route('annonces.reserve', $annonce->id) }}" method="post" class="max-w-lg mx-auto bg-white p-8 rounded shadow-md">
        @csrf
        <div class="mb-6">
            <div class="form-group">
                <label for="start_date" class="block text-gray-700 font-bold mb-2">Start Date:</label>
                <input type="date" id="start_date" name="start_date" class="form-control" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" required>
            </div>
        </div>  
        <div class="mb-6">
            <div class="form-group">
                <label for="end_date" class="block text-gray-700 font-bold mb-2">End Date:</label>
                <input type="date" id="end_date" name="end_date" class="form-control" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-yellow-500" required>
            </div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
            @endif
        </div>
        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Reserve</button>
        <!-- <div id="successMessage" class="hidden mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-md"></div> -->
        <div id="errorMessage" class="hidden mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-md"></div>
    </form>
    
</div>

    <script>
        document.getElementById("reservationForm").addEventListener("submit", function(event) {
            var startDate = new Date(document.getElementById("start_date").value);
            var endDate = new Date(document.getElementById("end_date").value);

            if (endDate < startDate) {
                event.preventDefault(); // Prevent form submission
                document.getElementById("errorMessage").innerText = "Please choose a valid end date.";
                document.getElementById("errorMessage").classList.remove("hidden");
                document.getElementById("successMessage").classList.add("hidden");
            } else {
            }
        });

        var now = new Date();

var nowFormatted = now.getFullYear() + '-' + ('0' + (now.getMonth() + 1)).slice(-2) + '-' + ('0' + now.getDate())
    .slice(-2) + 'T' + ('0' + now.getHours()).slice(-2) + ':' + ('0' + now.getMinutes()).slice(-2);

document.getElementById('start_date').min = nowFormatted;

function updateEndTimeMin() {
    var startTimeValue = document.getElementById('start_date').value;
    document.getElementById('end_date').min = startTimeValue;
}
    </script>
</body>
</html>



@include('partials.footer')
     