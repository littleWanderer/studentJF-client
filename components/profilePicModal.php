<div class="modal fade" role="dialog" id="imageModal">
    <div class="modal-dialog">
        <form id="image_upload_form" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Postavi profilnu sliku</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="container" >
                    <div class="row align-items-center">
                        <div class="col-12" style="padding: 2%; margin-left: 1.3%;">
                              <div class="form-group">
							
								<input type="file" name="image" id="image"  required="required" class="form-control">

							  </div> 
							  <p>* Postavite sliku u .jpg, .jpeg ili .png formatu</p>
                        </div>   
                    </div>
                </div>

                <div class="modal-footer" >
                    <button type="submit" class="btn button-orange" form="image_upload_form">Sačuvaj</button>
                    <button type="button" class="btn button-orange" data-dismiss="modal">Zatvori</button>
                </div>

            </div>

        </form>
    </div>

</div>  