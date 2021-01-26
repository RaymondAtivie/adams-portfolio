<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-white font-body">
    <div class="mx-36">
        <?php include("navbar.php") ?>
        <main>
            <section class="max-w-md m-auto text-brand-gray-medium text-sm">
                <div class="mt-12">
                    <h3 class="mb-5 text-center text-xl font-semibold">Let's work together</h3>
                    <p class="mb-10 text-center">You have an idea in your mind and looking for execution with creative perfect designs, Let’s build your idea and your brand an exposure</p>
                </div>
                <div class="mb-5">
                    <label class="block" for="name">Your name (required)</label>
                    <input class="w-full bg-transparent border border-gray-400 py-2 rounded-sm" type="text">
                </div>
                <div class="mb-5">
                    <label class="block" for="email">Email (required)</label>
                    <input  class="w-full bg-transparent border border-gray-400 py-2 rounded-sm" type="email">
                </div>
                <div class="mb-5">
                    <label class="block" for="subject">Subject</label>
                    <input class="w-full bg-transparent border border-gray-400 py-2 rounded-sm" type="text">
                </div>
                <div class="mb-5">
                    <label class="block" for="message">Your message</label>
                    <textarea class="w-full bg-transparent border border-gray-400 py-2 rounded-sm" name="message" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-16">
                    <button class="rounded-full bg-brand-yellow-light px-14 py-2 text-white">Send</button>
                </div>
            </section>
        </main>
        <?php include("footer.php") ?>
    </div>
</body>
</html>