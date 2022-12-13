<?php
include "controle/nav.php";
?>
<div class="container mt-5">

    <!--Inicio do section-->
        <div class="container">
            <!--Inicio do card do login-->
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col align-self-end m-5">
                    <div class="card alert alert-dark lgn ">
                        <div class="card-header text-center alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="10em" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                        </div>
                        <div class="card-body alert">
                            <!--Inicio do formulário-->
                            <form method="post" action="#">
                                <div class="mb-3">
                                    <label for="email" class="form-label text-center">Email</label>
                                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Digite seu email..." required>
                                    <div id="emailHelp" class="form-text">Nunca compartilhe seu email com niguém!
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="caixinha form-control" placeholder="Digite sua senha" id="showLg" name="senha">
                                    <button class="btn btn-outline-dark" type="button" onclick="seeLg(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                    </button>

                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">Me mantenha logado</label>
                                </div>
                                <div class="row">
                                    <div class="col aling-self-start">
                                        <button type="submit" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg>
                                            Entrar
                                        </button>
                                    </div>
                                    <div class="col aling-self-end">
                                        <a href="cadastro.php">
                                            <p>Não tem uma conta? Cadastre-se</p>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!--Inicio do formulário-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Fim do card de login-->
        </div>
    <!--Inicio do section-->
</div>
<?php
include "controle/footer.php";
?>