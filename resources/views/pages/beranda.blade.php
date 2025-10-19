<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>

<style>
    @media(max-width: 640px){
        .hero{
            width: 100%;
            height: 100vh;
            margin-top: 100px;
        }
        .relative{
            margin-left: 200px;
        }

        .text{
            text-align: center;
            position: relative;
            margin-left: 200px;
        }
    }
</style>

<body>
    <div class="hero bg-white min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="relative">
                <span class="absolute -bottom-8 -z-10 -left-23">
                    <svg width="500" height="500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#BAE6FF" d="M37.1,-41.8C50.8,-32.6,66.6,-23.6,72.3,-10C78,3.6,73.6,21.8,63.7,34.7C53.8,47.7,38.4,55.3,21.8,62.4C5.3,69.5,-12.4,76,-29.4,73.1C-46.3,70.2,-62.6,57.9,-67.5,42.4C-72.4,26.9,-65.9,8.2,-60.6,-8.8C-55.3,-25.8,-51.3,-41.1,-41.4,-50.9C-31.5,-60.8,-15.8,-65.2,-2.1,-62.8C11.7,-60.3,23.3,-51,37.1,-41.8Z" transform="translate(100 100)" />
                    </svg>
                </span>
                <span class="absolute -bottom-2 -left-10">
                    <svg width="40" height="40" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#BAE6FF" d="M67.4,-38.7C80.8,-15.8,80.4,15.2,66.9,37.9C53.3,60.6,26.7,75,0.1,75C-26.5,74.9,-53,60.4,-67,37.4C-81.1,14.4,-82.7,-17.1,-69.4,-39.9C-56.2,-62.7,-28.1,-76.7,-0.5,-76.4C27,-76.1,54.1,-61.5,67.4,-38.7Z" transform="translate(100 100)" />
                    </svg>
                </span>
                <img
                    src="../assets/images/pict1.png"
                    class="max-w-sm rounded-full" width="300px"/>
            </div>
            <div class="text">
                <p class="text-info py-4 text-xl">JUNIOR FULLSTUCK DEVELOPER</p>
                <h1 class="text-6xl font-bold uppercase">Yo jan</h1>
                <div class="badge text-xl h-10 badge-soft text-info rounded-sm font-semibold" style="background-color: #BAE6FF;">Nanda Rezqy Agyun Putra</div>
                <p class="py-6 text-xl">
                    Hi, Saya Nanda seorang junior fullstack developer, saya mempunyai keinginan besar menjadi seorang fullstack developer yang andal.Saya juga mempunyai minat besar dalam bidang pengembangan web, pengelolaan serverdan database, serta debugging.
                </p>
                <button class="btn text-info font-bold rounded-lg" style="background-color: #BAE6FF;">Hubungi Saya</button>
            </div>
        </div>
    </div>
</body>

</html>