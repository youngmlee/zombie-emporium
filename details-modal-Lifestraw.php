<div class="modal fade details-3" id="details-3" tableindex="-3" role="dialog" aria-labelledby="details-3" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">Lifestraw</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-blocker">
                <img src="images/lifestraw.jpg" alt="Lifestraw" class="details img-responsive" />
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p>Water-borne diseases? Ain't nobody got time for that! This will allow you to drink from wild water sources without worrying about cholera!</p>
              <hr />
              <p>Price: $19.95</p>
              <p>Brand: Levis</p>
              <form action="add_cart.php" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
      </div>
    </div>
  </div>
</div>
