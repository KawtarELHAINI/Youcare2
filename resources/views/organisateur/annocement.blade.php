<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4 py-2 md:flex md:justify-between md:items-center">
        <div class="flex justify-between items-center">
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">
            <div class="md:flex md:items-center md:ml-4">
                <a class="block no-underline text-blue-600 font-medium text-lg py-2 px-4 lg:-ml-2 hover:text-black" href="#">Annonce</a>
                <a class="block no-underline text-blue-600 font-medium text-lg py-2 px-4 lg:-ml-2 hover:text-black" href="/organisateur/reservation">Mes réservations</a>
            </div>
        </div>
        <div class="md:flex md:items-center">
            <form action="" id="logout-form">
                <button type="submit" class="bg-blue-600 text-gray-200 py-2 px-4 rounded hover:bg-blue-500 hover:text-gray-100">Log Out</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mx-auto py-16">
    <div class="flex justify-end mb-10">
        <button id="addPubliciter" onclick="showModal6()" class="px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-white hover:text-black border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600">
            Add Annonce
        </button>
    </div>

    <div id="myModal6" class="modal6 hidden fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <div class="modal-content6 bg-white w-full max-w-md mx-auto p-8 rounded-lg">
            <span class="close6 absolute top-0 right-0 m-4 cursor-pointer text-2xl">&times;</span>
            <form id="addAnnonce">
                <p class="text-2xl font-bold text-center mb-6">Ajouter Annonce</p>
                <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                <input class="form-input w-full mb-4" type="text" name="title" id="title" placeholder="Enter title">
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                <input class="form-input w-full mb-4" type="text" name="description" id="description" placeholder="Enter description">
                <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">Location</label>
                <input class="form-input w-full mb-4" type="text" name="location" id="location" placeholder="Enter location">
                <label for="date" class="block text-sm font-semibold text-gray-700 mb-2">Date</label>
                <input class="form-input w-full mb-4" type="date" name="date" id="date">
                <label for="type" class="block text-sm font-semibold text-gray-700 mb-2">Type</label>
                <select class="form-select w-full mb-4" name="type" id="type">
                    <option value="1">Type 1</option>
                    <option value="2">Type 2</option>
                    <option value="3">Type 3</option>
                    <option value="4">Type 4</option>
                </select>
                <label for="required_skills" class="block text-sm font-semibold text-gray-700 mb-2">Required Skills</label>
                <input class="form-input w-full mb-6" type="text" name="required_skills" id="required_skills" placeholder="Enter required skills">
                <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-600">Save</button>
            </form>
        </div>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <!-- Annonce items will go here -->
    </div>
</div>

<script src="{{ asset('js/Organizerannonce.js') }}"></script>
<script src="{{ asset('js/logout.js') }}"></script>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('change', function() {
        if (this.checked) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    });

    function showModal6() {
        document.getElementById("myModal6").classList.remove('hidden');
    }

    function closeModal6() {
        document.getElementById("myModal6").classList.add('hidden');
    }
</script>

</body>
</html>
