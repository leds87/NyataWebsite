<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        display: fixed;
    }

    .sidebar {
        width: 250px;
        background-color: red;
        color: #fff;
        padding-top: 20px;
        height: 300px;
        position: fixed;
        top: 100px;
        left: 50px;
        transition: width 0.3s;
        border: rounded;
        text-align: center;
        border-style: solid;
        
    }

    .content {
        margin-left: 400px;
        padding: 20px;
    }

    .sidebar a {
        padding: 15px;
        text-decoration: none;
        color: #fff;
        display: block;
        transition: background-color 0.3s;
    }

    .sidebar a:hover {
        background-color: #555;
    }

    /* Adjustments for small screens */
    @media (max-width: 768px) {
        .sidebar {
            width: 0;
        }

        .content {
            margin-left: 0;
        }
    }
</style>

<div class="sidebar">
    <a href="#" class="p-4 block hover:bg-gray-600">Dashboard</a>
    <a href="#" class="p-4 block hover:bg-gray-600">School</a>
    <a href="#" class="p-4 block hover:bg-gray-600">Children</a>
    <a href="#" class="p-4 block hover:bg-gray-600">User</a>
    <a href="#" class="p-4 block hover:bg-gray-600">Log</a>
</div>
<div class="content">
    <h1 class="text-2xl text-center font-bold mb-4 mx-auto ">Admin Overview</h1>
    <!-- Add more content here -->
</div>