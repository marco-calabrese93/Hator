<?php $this->view("hator/header",$data);?>

        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active">404</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Error 404 Area Start -->
        <div class="error404-area ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-wrapper text-center">
                            <div class="error-text">
                                <h1>404</h1>
                                <h2>Opps!   PAGINA NON TROVATA</h2>
                                <p>Ci dispiace ma la pagina che stai cercando non esiste, è stata rimossa il suo nome
                                    è cambiato o non è temporaneamente disponibile.</p>

                
                            </div>
                            <div class="search-error">
                                <form id="search-form" action="#">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="error-button">
                                <a href="home">Torna alla home page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error 404 Area End -->
<?php $this->view("hator/footer",$data);?>