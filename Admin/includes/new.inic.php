<div class="container">
    <div class="row">
        <div class="col-sm-12 text-lett">
            <h2 class="mt-5">Nuevo autor</h2>
        </div>
    </div>
    <div class="row form_new">
        <div class="col-lg-12 text-lett">
            <div class="col-lg-2 text-lett"></div>
            <div class="col-lg-10 text-lett">
                <form role="form" action="actions/new.act.php" method="post">
                    <div class="form-goup row">
                        <label for="display_name" class="col-lg-2 col-form-label">Name</label>
                        <div class="col-lg-4 text-lett">
                            <input type="text" class="form-control" id="display_name" name="display_name">
                        </div>
                    </div>
<br>
                    <div class="form-goup row">
                        <label for="email" class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-4 text-lett">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
<br>
                    <div class="form-goup row">
                        <label for="password" class="col-lg-2 col-form-label">Password</label>
                        <div class="col-lg-4 text-lett">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="form-goup row">
                        <label for="enable" class="col-lg-2 col-form-label">Check</label>
                        <div class="col-lg-3 text-lett">
                            <input type="checkbox" id="enable" name="enable">
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-lg-2 text-lett"></div>
        </div>

    </div>
</div>