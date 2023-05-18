<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Include Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Contact Form</h2>
        <form method="post" action="mail.php">
            <div class="mb-4">
                <label for="name" class="block mb-1">Name:</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 px-2 py-1">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-1">Email:</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 px-2 py-1">
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-1">Message:</label>
                <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 px-2 py-1"></textarea>
            </div>
            <div class="mb-4">
                <label for="gender" class="block mb-1">Gender:</label>
                <select id="gender" name="gender" class="w-full border border-gray-300 px-2 py-1">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send Email</button>
        </form>
    </div>
</body>
</html>
