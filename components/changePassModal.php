<div class="modal fade" role="dialog" id="passwordModal">
        <div class="modal-dialog">
            <form id="change_password_form" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Promena lozinke</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="container" >
                        <div class="row align-items-center">
                            <div class="col-8" style="padding: 2%; margin-left: 1.3%;">
                                  <div class="form-group">
									<label>Stara lozinka</label>
									<input type="password" id="old_password"  required="required" class="form-control">
								  </div> 
								  <div class="form-group">
									<label>Nova lozinka</label>
									<input type="password" id="new_password"  required="required" class="form-control">
								  </div>
								  <div class="form-group">
									<label>Potvrdi novu lozinku</label>
									<input type="password" id="confirmed_password"  required="required" class="form-control">
								  </div>
                            </div>   
                        </div>
                    </div>

                    <div class="modal-footer" >
                        <button type="submit" class="btn button-orange" form="change_password_form">Sačuvaj</button>
                        <button type="button" class="btn button-orange" data-dismiss="modal">Zatvori</button>
                    </div>

                </div>

            </form>
        </div>

    </div>