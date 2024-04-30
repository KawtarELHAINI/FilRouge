<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>autokaw</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <form id="reservationForm" action="{{ route('annonces.reserve', $annonce->id) }}" method="post" class="max-w-lg mx-auto bg-white p-8 rounded shadow-md">
            @csrf
            <div class="mb-6">
                <label for="start_date" class="block text-gray-700 font-bold mb-2">Start Date:</label>
                <input type="date" id="start_date" name="start_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
            </div>
            <div class="mb-6">
                <label for="end_date" class="block text-gray-700 font-bold mb-2">End Date:</label>
                <input type="date" id="end_date" name="end_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
            </div>
            <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Reserve</button>
            <div id="successMessage" class="hidden mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-md"></div>
            <div id="errorMessage" class="hidden mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-md"></div>
        </form>
    </div>

    <script>
        document.getElementById("reservationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var startDate = new Date(document.getElementById("start_date").value);
            var endDate = new Date(document.getElementById("end_date").value);

            if (endDate < startDate) {
                document.getElementById("errorMessage").innerText = "Please choose a valid end date.";
                document.getElementById("errorMessage").classList.remove("hidden");
                document.getElementById("successMessage").classList.add("hidden");
            } else {
                // Here you can add AJAX call to submit the form data to the server
                // For demonstration, I'm just showing success message directly
                document.getElementById("successMessage").innerText = "Reserved successfully!";
                document.getElementById("successMessage").classList.remove("hidden");
                document.getElementById("errorMessage").classList.add("hidden");
            }
        });
    </script>
</body>
</html>
