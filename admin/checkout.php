    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end mb-4 page-title">
                	<h3 class="text-white">Verificar</h3>
                    <hr class="divider my-4" />

                </div>
                
            </div>
        </div>
    </header>
    <section class="page-section mb-2" id="">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" id="checkout">
                    <h4>Confirmar la información de entrega</h4>
                    <div class="form-group">
                        <label for="" class="control-label">Nombre propio</label>
                        <input type="text" name="first_name" required="" class="form-control" value="<?php echo $_SESSION['login_first_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="text" name="last_name" required="" class="form-control" value="<?php echo $_SESSION['login_last_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Contacto</label>
                        <input type="text" name="mobile" required="" class="form-control" value="<?php echo $_SESSION['login_mobile'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Correo</label>
                        <textarea cols="30" rows="3" name="address" required="" class="form-control"><?php echo $_SESSION['login_address'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="email" name="email" required="" class="form-control" value="<?php echo $_SESSION['login_email'] ?>">
                    </div>  

                    <div class="text-center">
                        <button class="btn btn-block btn-outline-primary">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>  
    $(document).ready(function(){
        $('#checkout').submit(function(e){
            e.preventDefault()

            star_load()
            $.ajax({
                url:"ajax.php?action=save_order",
                method:'POST',
                data:$(this).serialize(),
                success:function(resp){
                    if(resp==1){
                        alert_toast("Order successfully Placed.")
                        setTimout(function(){
                            location.replace('index.php?page=home')
                        })
                    }
                }
            })
        })
    })
</script>