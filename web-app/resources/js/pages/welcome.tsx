import { Head } from '@inertiajs/react';

export default function Welcome() {
    return (
        <>
            <Head title="Welcome">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
            </Head>

            <div className="flex min-h-screen flex-col items-center justify-center bg-gradient-to-br from-green-100 via-green-200 to-green-300 p-6 text-[#1b1b18] dark:bg-gradient-to-br dark:from-[#0a0a0a] dark:via-[#111] dark:to-[#1b1b18] dark:text-[#F4F6F7]">

                {/* Decorative accent */}
                <div className="absolute top-20 right-10 w-32 h-32 bg-green-400 opacity-20 rounded-full animate-pulse"></div>

                <div className="text-center relative z-10">
                    <h1 className="text-5xl font-bold mb-4 animate-fade-in-up">Welcome to DimaMed Admin</h1>
                    <p className="text-lg mb-6 animate-fade-in-up delay-200">
                        Professional care with a personal touch. Your well-being is our priority.
                    </p>
                    <a
                        href="/product"
                        className="inline-block px-8 py-4 bg-green-500 text-white rounded-xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl hover:bg-green-600 animate-pulse"
                    >
                        Access the Admin Panel
                    </a>
                </div>
            </div>
        </>
    );
}
