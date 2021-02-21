<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Adams</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body class="font-normal bg-brand-black font-body">
    <div class="max-w-4xl px-6 mx-auto">
        <header class="mb-32">
            <!--header start-->
            <?php include("navbar.php") ?>
            <div class="flex flex-col items-center mt-32 md:flex-row">
                <div class="w-full md:w-4/6">
                    <div>
                        <img src="img/hi.png" alt="Hi Image">
                    </div>
                    <div class="text-sm">
                        <p class="pb-4 text-gray-400">My name is Adams David and I am a UI/UX Designer.</p>
                        <div class="pb-4 mb-8 leading-7 tracking-wider text-white">
                            Over 3+ years of hands-on experience on UI/UX design and Interaction design expertise. I employ my creative, technical, and analytical prowess to craft unique ideas that delight users, tell compelling stories, and help drive business growth.
                        </div>
                        <div class="">
                            <button class="px-8 py-2 mr-8 text-white rounded-full bg-brand-orange"><a href="contact.php">Get in Touch</a></button>
                            <button class="text-white bg-transparent border-b border-brand-orange"><a href="adamsdavid-cv.pdf">Download resume</a></button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end hidden w-full md:flex md:w-2/6">
                    <img class="" src="img/man.png" alt="Man waving">
                </div>
            </div>
        </header>
        <!--header-end-->
        <main>
            <section class="">
                <div class="mb-16">
                    <h2 class="mb-1 text-lg text-center text-white">Projects</h2>
                    <div class="w-20 m-auto mb-5 border-t-2 border-brand-orange"></div>
                    <p class="text-sm text-center text-white">Here are some projects I had worked on for some clients</p>
                </div>
                <div class="flex flex-col mb-12 md:flex-row">
                    <div class="flex items-center justify-center w-full md:w-1/2 bg-brand-pink">
                        <img src="img/shoplift.png" alt="My Tudo">
                    </div>
                    <div class="w-full md:w-1/2 bg-brand-blue-dark">
                        <div class="w-3/4 py-16 m-auto text-white">
                            <h3 class="pb-16 text-sm font-normal font-body">WEB APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleMain">SHOPLIFT</h2>
                            <p class="pb-16 text-sm font-medium font-body">Building a consistent web expeirence on shoplift platform</p>
                            <button class="px-12 py-3 rounded-full bg-brand-orange">View case study</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mb-12 md:flex-row">
                    <div class="order-2 w-full bg-blue-400 md:w-1/2 md:order-1">
                        <div class="w-3/4 py-16 m-auto text-white">
                            <h3 class="pb-16 text-sm font-normal font-body">MOBILE APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleMain">Cash Exchange</h2>
                            <p class="pb-16 text-sm font-medium font-body">Improving point of service (POS) to a one touch service recieve/transfer cash</p>
                            <button class="px-12 py-3 rounded-full bg-brand-orange">View case study</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-center order-1 w-full md:w-1/2 bg-brand-pink md:order-2">
                        <img src="img/mobileget.png" alt="My Tudo">
                    </div>
                </div>
                <div class="flex flex-col mb-12 md:flex-row">
                    <div class="flex items-center justify-center w-full md:w-1/2 bg-brand-pink">
                        <img src="img/eventr.png" alt="My Tudo">
                    </div>
                    <div class="w-full md:w-1/2 bg-brand-red">
                        <div class="w-3/4 py-16 m-auto text-white">
                            <h3 class="pb-16 text-sm font-normal font-bodyl">WEB APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleSub">EventR</h2>
                            <p class="pb-16 text-sm font-medium font-body">Improving the online Event Platform experience and interaction between hosts and online audience.</p>
                            <button class="px-12 py-3 rounded-full bg-brand-orange">View case study</button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mb-24 md:flex-row">
                    <div class="order-2 w-full md:w-1/2 bg-brand-blue-light md:order-1">
                        <div class="w-3/4 py-16 m-auto text-white">
                            <h3 class="pb-16 text-sm font-normal font-body">MOBILE APP</h3>
                            <h2 class="pb-16 text-3xl font-bold font-titleSub">my Tudo</h2>
                            <p class="pb-16 text-sm font-medium font-body">Working in a multidisciplinary team to design a tool to help people smash their goals</p>
                            <button class="px-12 py-3 rounded-full bg-brand-orange">View case study</button>
                        </div>
                    </div>
                    <div class="flex items-center justify-center order-1 w-full md:w-1/2 md:order-2 bg-brand-pink">
                        <img src="img/tudo.png" alt="My Tudo">
                    </div>
                </div>
                <!-- <div class="flex justify-center mb-24">
                    <button class="px-10 py-2 text-white border rounded-full border-brand-orange">more projects</button>
                </div> -->
            </section>
        </main>
        <?php include("footer.php") ?>
    </div>

    <script src="index.js"></script>
</body>

</html>