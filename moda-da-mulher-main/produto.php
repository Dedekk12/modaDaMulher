<?php require __DIR__ . "/header.php"; ?>

<main class="produto">


    <div class="container">

        <nav  class="mt-5" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="produtos.php">produtos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camiseta manga comprida</li>
            </ol>
        </nav>

        <!-- imagem e descrição -->
        <div class="row">

            <div class="col-md-7">

                <img src="assets/images/produtos/details/foto-carrinho-camiseta-manga-comprida.jpg" class="w-100" alt="">

            </div>
            <div class="col-md-5">

             <h1> Camiseta de manga comprida </h1>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum veniam libero modi, perferendis officia iste alias, impedit odio asperiores deleniti quisquam dolorem voluptates aliquam quidem illum repudiandae cum aut placeat?</p>

            <div class="rating">
                <p class="card-text">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                </p>
            </div>
            <h5 class="preco mt-3">R$ 79,90</h5>
            <span>Em até 12x sem juros</span>

            <div class="comprar">

                <form action="">
                    <select class="mt-4 form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                    </select>

                    <button type="submit" class="mt-4 w-100 btn btn-success">comprar</button>
                </form>

            </div>

            </div>

        </div>
        <!-- imagem e descrição -->


        <div class="comentario row">

            <div class="col">

                <div class="fb-comments"
                data-href="https://www.seusite.com/sua-pagina"

                data-width = "100%"
                data-numpost = "5"
                >
                </div>


            </div>


        </div>
    </div>

</main>

<script async defer crossorigin = "anonymous"
src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v17.0"
>
</script>


<?php require __DIR__ . "/footer.php"; ?>