<div class="modal fade details-9" id="details-9" tableindex="-9" role="dialog" aria-labelledby="details-9" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">Wolverine Steel Toe Boots</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-blocker">
                <img src="images/boots.jpg" alt="Boots" class="details img-responsive" />
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p>A good pair of boots may be the difference between outrunning a zombie and being devoured by one! You may find yourself traversing rough terrain in the zombie apocalypse. Never fear! These steel toed boots will provide your feet with the protection and comfort they deserve!</p>
              <hr />
              <p>Price: $59.95</p>
              <p>Brand: Wolverine</p>
              <form action="add_cart.php" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" />
                  </div><br /><br /><br />
                  <div class="form-group">
                    <label for="size">Size:</label>
                    <select name="size" id="size" class="form-control">
                      <option value=""></option>
                      <option value="10">US10</option>
                      <option value="11">US11</option>
                      <option value="12">US12</option>
                    </select>
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
