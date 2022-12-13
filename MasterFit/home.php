<?php
include "controle/nav.php";
?>
<div class="container-fluid bg-dark p-3 sidx">
    <!--Inicio do Carousel-->


    <!--Inicio do section-->


    <div class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/1.png" class="d-block w-100" alt="Garanta uma vida mais saudável">
            </div>
            <div class="carousel-item">
                <img src="imgs/2.png" class="d-block w-100" alt="Foco">
            </div>
            <div class="carousel-item">
                <img src="imgs/3.png" class="d-block w-100" alt="Mais de 1013 unidades em todo o país!">
            </div>
        </div>

    </div>
    <!--Inicio do card-->
    <div class="row mt-3">
        <!--Card 1-->
        <div class="col-12 col-md-4">
            <div class="card text-bg-dark cidx movingBox">
                <img src="imgs/card/imgcard1.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <a href="#" class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        350m

                        <h5 class="card-title">Recreio</h5>
                    </a>
                </div>
                <div class="card-footer text-center alert bg-light">
                    <div class="container text-center text-dark">
                        <div class="row">
                            <h5>PLANOS DISPONÍVEIS</h5>
                            <div class="col align-self-center">
                                PLANO FIT
                            </div>
                            <div class="col align-self-center">
                                PLANO PRO
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning">
                        <a href="login.html">
                            COMECE AGORA
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <!--Fim do Card 1-->
        <!--Card 2-->
        <div class="col-12 col-md-4">
            <div class="card text-bg-dark cidx">
                <img src="imgs/card/imgcard2.png" class="card-img movingBox" alt="...">
                <div class="card-img-overlay">
                    <p class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        1.5km
                    </p>
                    <h5 class="card-title">Madureira</h5>

                </div>
                <div class="card-footer text-center alert bg-light">
                    <div class="container text-center text-dark">
                        <div class="row">
                            <h5>PLANOS DISPONÍVEIS</h5>
                            <div class="col align-self-center">
                                PLANO FIT
                            </div>
                            <div class="col align-self-center">
                                PLANO PRO
                            </div>
                            <div class="col align-self-center">
                                PLANO MASTER
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning">
                        <a href="login.html">
                            COMECE AGORA
                        </a>
                    </button>
                </div>
            </div>
            <!--Fim do card 2-->
        </div>
        <div class="col-12 col-md-4">
            <div class="card text-bg-dark cidx">
                <img src="imgs/card/imgcard3.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <p class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        31km
                    </p>
                    <h5 class="card-title">
                        Rio de Janeiro
                    </h5>
                </div>
                <div class="card-footer text-center alert bg-light ">
                    <div class="container text-center text-dark">
                        <div class="row">
                            <h5>PLANOS DISPONÍVEIS</h5>
                            <div class="col align-self-center">
                                PLANO FIT
                            </div>
                            <div class="col align-self-center">
                                PLANO PRO
                            </div>
                            <div class="col align-self-center">
                                PLANO MASTER
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning">
                        <a href="login.html">
                            COMECE AGORA
                        </a>
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!--Fim do card-->

    <!--Fim do section-->
</div>
<?php
include "controle/footer.php";
?>